<?php
namespace Home\Controller;
use Think\Controller;

class ProductController extends BaseController{


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
                $ImgPath = "/Public/uploads/product" . $file['savepath'] . $file['savename'];
            }
            return $ImgPath;
        }
    }
}