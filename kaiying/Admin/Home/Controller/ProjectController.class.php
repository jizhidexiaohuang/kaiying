<?php

namespace Home\Controller;

use Think\Controller;

class ProjectController extends BaseController
{
    public function Index()
    {
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $videoInfo = M('project')->where('Type="大海凯盈"')->order("Top DESC,UpdateTime DESC")->select();
        $this->assign('ProjectInfo', $videoInfo);
        $this->display();
    }

    public function Indexky()
    {
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $videoInfo = M('project')->where('Type="凯盈集团"')->order("Top DESC,UpdateTime DESC")->select();
        $this->assign('ProjectInfo', $videoInfo);
        $this->display();
    }

    public function Indexzd()
    {
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $videoInfo = M('project')->where('Type="大海智地"')->order("Top DESC,UpdateTime DESC")->select();
        $this->assign('ProjectInfo', $videoInfo);
        $this->display();
    }

    public function projectedit()
    {
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if ($_POST) {
            $VID = intval($_POST['PID']);
            if ($_POST['Title']) {
                $data['Title'] = htmlspecialchars(trim($_POST['Title']));
            } else {
                $this->alertMes("请输入项目标题");
            }
            if ($_POST['remark']) {
                $data['remark'] = htmlspecialchars(trim($_POST['remark']));
            } else {
                $this->alertMes("请输入小标题");
            }
            $data['Address'] = htmlspecialchars(trim($_POST['Address']));
            $data['Statu'] = htmlspecialchars(trim($_POST['Statu']));
            $data['ord'] = intval($_POST['ord']);
            $data['Tel'] = htmlspecialchars(trim($_POST['Tel']));
            $data['content'] = htmlspecialchars(trim($_POST['content']));
            $data['Top'] = intval($_POST['Top']) ? intval($_POST['Top']) : 0;
            if ($_FILES['Img']['name']) {
                $data['Img'] = D('News')->Imgupload();
            }
            if ($_FILES['ImgArr']['name'][0]) {
                $images_name = '';
                $img_name = time();
                foreach ($_FILES['ImgArr']['tmp_name'] as $k => $v) {
                    move_uploaded_file($v, './Public/uploads/project/' . $img_name . $_FILES['ImgArr']['name'][$k]);
                    $images_name .= './Public/uploads/project/' . $img_name . $_FILES['ImgArr']['name'][$k] . ',';
                }
                if($_POST['imgarrType'] == 2){
                    $nowImgArr = M('project')->where('ID = '.$VID)->getfield("ImgArr");
                    $data['ImgArr'] = $nowImgArr.$images_name;
                }else{
                    $data['ImgArr'] = $images_name;
                }
            }
            $data['Type'] = htmlspecialchars(trim($_POST['Type']));
            switch ($data['Type']) {
                case '大海凯盈':
                    $url = U('Project/Index');
                    break;
                case '凯盈集团':
                    $url = U('Project/Indexky');
                    break;
                case '大海智地':
                    $url = U('Project/Indexzd');
                    break;
                default:
                    $url = U('Project/Index');
                    break;
            };
            $data['UpdateTime'] = time();
            if ($VID) {
                $res = M('project')->where('ID = ' . $VID)->save($data);
                $str = '修改';
            } else {
                $res = M('project')->add($data);
                $str = '添加';
            }
            if ($res) {
                $this->alertMes($str . "成功", $url);
            } else {
                $this->alertMes($str . "失败，请重试");
            }
        } else {
            $Type = htmlspecialchars(trim($_GET['T']));
            switch ($Type) {
                case '大海凯盈-':
                    $url = U('Project/Index');
                    break;
                case '凯盈集团-':
                    $url = U('Project/Indexky');
                    break;
                case '大海智地-':
                    $url = U('Project/Indexzd');
                    break;
                default:
                    $url = U('Project/Index');
                    break;
            };
            if ($_GET['ID']) {
                $PID = intval($_GET['ID']);
                $Pinfo = M('project')->where('ID =' . $PID)->find();
                if ($Pinfo) {
                    $imgArr = json_encode($Pinfo["ImgArr"],false);
                    $this->assign('ImgArr',$imgArr);
                    $this->assign('Pinfo', $Pinfo);
                } else {
                    $this->alertMes("操作失败，请重试", $url);
                }
            }
            $this->assign('T', $Type);
            $this->display();

        }

    }

    public function delProject()
    {
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if ($_GET['PID']) {
            $VID = intval($_GET['PID']);
            $res = M('Project')->where("ID =" . $VID)->delete();
            if ($res) {
                $this->alertMes("操作成功", U('Project/Index'));
            } else {
                $this->alertMes("操作失败，请重试", U('Project/Index'));
            }
        } else {
            $this->alertMes("操作失败，请重试", U('Project/Index'));
        }
    }

    public function Imgupload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 100 * 1024 * 1024;// 设置附件上传大小
        $upload->exts = array('mp4');// 设置附件上传类型
        $upload->rootPath = './Public/uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            foreach ($info as $file) {
                $ImgPath = "/Public/uploads/" . $file['savepath'] . $file['savename'];
            }
            return $ImgPath;
        }
    }

    public function delete(){
        var_dump($_REQUEST);
    }
}