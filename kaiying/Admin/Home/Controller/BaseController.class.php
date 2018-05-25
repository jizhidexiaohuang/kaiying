<?php
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller{
    public function __construct(){
        parent::__construct();
//        $Role = M('role')->field("Role")->where("id = 1")->find();
        if($_COOKIE['UserID']){
            $UserID = intval($_COOKIE['UserID']);
            $UserInfo = M('user')->where("ID = ".$UserID)->find();
            $this->assign('UserInfo',$UserInfo);
        }
        $RoleName = M('auth')->where("Status = 1")->select();
        $NavArr = array();
        foreach($RoleName as $k=>$v){
            if($UserInfo['Type'] == '普通管理员' && $v['AuthName'] == '用户管理'){
                continue;
            }
            if($v["fid"] == 0){
                $NavArr[$k] = $v;
                $Son = M('auth')->where("fid = {$v['id']} and Status = 1")->select();
                if($Son){
                    $NavArr[$k]['son'] = $Son;
                }
            }else{
                continue;
            }
        }
        $nav = isset($_GET['nav'])?intval($_GET['nav']):1;
        $fid = M('auth')->where('id ='.$nav)->getField('fid');
        //留言条数
        $msgcount = M('message')->where("Status = 0")->count();
        $this->assign('msgcount',$msgcount);
        $this->assign('fid',intval($fid));
        $this->assign('navID',$nav);
        $this->assign("nav",$NavArr);
    }

    public function checkLogin(){
        $SessionPassWord = $_SESSION['PassWord'];
        $CookieUserID = $_COOKIE['UserID'];
        if(!$CookieUserID || !$SessionPassWord || (!D('user')->where("PassWord ='".$SessionPassWord."'")->find())){
            return false;
        }else{
            session("PassWord",$SessionPassWord);
            cookie("UserID",$CookieUserID,3600);
            return true;
        }
    }

    public function alertMes($mes, $url = null)
    {
        echo "<script>alert('{$mes}')</script>";
        if($url != null && $url != 10){
            echo "<script>window.location='{$url}'</script>";
            exit;
        }elseif($url == 10){
            echo "<script>window.history.go(-1);</script>";
            exit;
        }else{
            echo "<script>window.history.back();</script>";
            exit;
        }
    }
}