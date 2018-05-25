<?php
namespace Home\Controller;
class UserController extends BaseController{
    public function Userlist(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $Data = M('user');
        $UserList = $Data->select();
        $this->assign('Ulist',$UserList);
        $this->assign('Title',"管理员列表-大海凯盈");
        $this->display();
    }

    public function add(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if($_POST){
            if($_FILES['CoverImg']['name']){
                $data['HeadImg'] = D('News')->ImgUpload();
            }
            if(!empty(trim($_POST['UserName']))){
                $data['UserName'] = htmlspecialchars(trim($_POST['UserName']));
            }else{
                $this->alertMes("管理员账号不能为空");
            }
            if($_POST['type'] != 1){
                if(!empty($_POST['PassWord']) && strlen($_POST['PassWord']) > 5){
                    $data['PassWord'] = md5($_POST['PassWord']);
                }else{
                    $this->alertMes("管理员密码至少六位");
                }
            }
            if($_POST['Mobile']){
                $data['Mobile'] = trim($_POST['Mobile']);
            }
            if($_POST['Department']){
                $data['Department'] = htmlspecialchars(trim($_POST['Department']));
            }
            if($_POST['Position']){
                $data['Position'] = htmlspecialchars(trim($_POST['Position']));
            }
            if(isset($_POST['Status'])){
                $data['status'] = intval($_POST['Status']);
            }
            if(isset($_POST['Sex'])){
                $data['Sex'] = intval($_POST['Sex']);
            }
            if($_POST['TrueName']){
                $data['TrueName'] = intval($_POST['TrueName']);
            }
            if($_POST['type'] != 1){
                $data['Type'] = '普通管理员';
            }
            $data['UpdateTime'] = date('Y-m-d H:i:s',time());
            if($_POST['type'] == 1){
                if($_POST['ID']){
                    $UID = intval($_POST['ID']);
                }else{
                    $this->alert('编辑管理员信息失败,请重试');
                }
                $addRes = M('user')->where("ID =".$UID)->save($data);
                $str = '编辑管理员信息';
            }else{
                $addRes = M('user')->add($data);
                $str = '添加管理员';
            }
            if($addRes){
                $this->alertMes($str."成功",U('User/Userlist'));
            }else{
                $this->alertMes($str."失败，请重试");
            }
        }else{
            if($_GET['ID']){
                $UID = intval($_GET['ID']);
                $UserInfo = M('user')->where('ID = '.$UID)->find();
                $this->assign('User',$UserInfo);
                if(intval($_GET['type']) == 1){
                    $this->assign('type',1);
                }
                $this->assign('str','编辑');

            }else{
                $this->assign('str','添加');
            }
            $this->assign('Title','管理员编辑-大海凯盈');
            $this->display();

        }
    }

    public function login(){
        if($_POST){
            $verify = intval(trim($_POST['verify']));
            if(!$verify){
                $this->error('请填写验证码',U('User/login'));
            }
            if($verify != $_COOKIE['verify']){
                $this->error('验证码错误，请重新输入',U('User/login'));
            }
            $data['UserName'] = htmlspecialchars(trim($_POST['UserName']));
            $data['PassWord'] = md5(trim($_POST['PassWord']));
            $data['status'] = 1;
            $checkLogin = D('user')->where($data)->find();
            if($checkLogin){
                session("PassWord",$checkLogin['PassWord']);
                cookie("verify",null);
                $IP = D('User')->GetIP();
                D('user')->where("ID = ".$checkLogin['ID'])->save(array('UpdateTime'=>date("Y-m-d H:i:s",time()),"LastIp"=>$IP));
                cookie("UserID",$checkLogin['ID'],3600);
                $this->success('登录成功',U('Index/index'));
            }else{
                $this->error('用户名/密码错误或被禁用，请重试',U('User/login'));
            }
        }else{
            $num1 = rand(0,99);
            $num2 = rand(0,99);
            $num3 = $num1 +$num2;
            $_COOKIE['verify'] = $num3;
            cookie("verify",$_COOKIE['verify'],300);
            $this->assign("n1",$num1);
            $this->assign("n2",$num2);
            $this->assign("Title","用户登录-大海凯盈");
            $this->display();
        }
    }

    public function delUser(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $UID = intval($_GET['ID']);
        if(!$UID){
            $this->alertMes("操作失败,请刷新重试");
        }
        $res = M('user')->where('ID = '.$UID)->delete();
        if($res){
            $this->alertMes("删除成功",U('User/UserList'));
        }else{
            $this->alertMes("删除失败,请刷新重试");
        }
    }

    public function change(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if(!$_GET['ID'] || !isset($_GET['status'])){
            $this->alertMes("操作失败,请刷新重试");
        }
        $UID = intval($_GET['ID']);
        $status = intval($_GET['status']);
        $res = M('user')->where("ID = ".$UID)->save(array("status"=>$status));
        if($res){
            $this->alertMes("操作成功",U('User/UserList'));
        }else{
            $this->alertMes("操作失败,请刷新重试");
        }
    }

    public function logout(){
        cookie("UserID",null);
        $this->success('登出成功', U('User/login'));
    }
}