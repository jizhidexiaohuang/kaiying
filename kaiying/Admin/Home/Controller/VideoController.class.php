<?php
namespace Home\Controller;
use Think\Controller;

class VideoController extends BaseController{
    public function Index(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $videoInfo = M('video')->select();
        $this->assign('videoInfo',$videoInfo);
        $this->display();
    }

    public function videoedit(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if($_POST){
            if($_POST['Title']){
                $data['Title'] = htmlspecialchars(trim($_POST['Title']));
            }else{
                $this->alertMes("请输入标题");
            }
            if($_FILES['Img']['name']){
                $data['Img'] = D('News')->Imgupload();
            }
            if($_FILES['CoverImg']['name']){
                $data['Url'] = $this->Imgupload();
            }
            $data['UpdateTime'] = time();
            if($_POST['VID']){
                $VID = intval($_POST['VID']);
                $res = M('video')->where('ID = '.$VID)->save($data);
                $str = '修改';
            }else{
                $res = M('video')->add($data);
                $str = '上传';
            }
            if($res){
                $this->alertMes($str."成功",U('Video/Index'));
            }else{
                $this->alertMes($str."失败，请重试");
            }
        }else{
            if($_GET['ID']){
                $VID = intval($_GET['ID']);
                $Vinfo = M('video')->where('ID ='.$VID)->find();
                if($Vinfo){
                    $this->assign('Vinfo',$Vinfo);
                }else{
                    $this->alertMes("操作失败，请重试",U('Video/Index'));
                }
            }
            $this->display();

        }

    }

    public function delVideo(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if($_GET['VID']){
            $VID = intval($_GET['VID']);
            $res = M('video')->where("ID =".$VID)->delete();
            if($res){
                $this->alertMes("操作成功",U('Video/Index'));
            }else{
                $this->alertMes("操作失败，请重试",U('Video/Index'));
            }
        }else{
            $this->alertMes("操作失败，请重试",U('Video/Index'));
        }
    }

    public function Imgupload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 100*1024*1024;// 设置附件上传大小
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
}