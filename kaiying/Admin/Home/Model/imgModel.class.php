<?php

namespace Home\Model;

use Think\Model;

class imgModel extends Model
{
    /*
     * 图片上传
     */
    public function Imgupload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4');// 设置附件上传类型
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