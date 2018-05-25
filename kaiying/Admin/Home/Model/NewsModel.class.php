<?php

namespace Home\Model;

use Think\Model;

class NewsModel extends Model
{
    /*
     * 图片上传
     */
    public function Imgupload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 2*1024*1024;// 设置附件上传大小
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

    /*
     * 图片上传
     */
    public function Imgupload2($file)
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 2*1024*1024;// 设置附件上传大小
        $upload->exts = array('jpg','png','jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload($file);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            foreach ($info as $file) {
                $ImgPath = "/Public/uploads/" . $file['savepath'] . $file['savename'];
            }
            return $ImgPath;
        }
    }

    public function ImguploadArr()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 2*1024*1024;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp4');// 设置附件上传类型
        $upload->rootPath = './Public/uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            $ImgPath='';
            foreach ($info as $file) {
                $ImgPath .= "/Public/uploads/" . $file['savepath'] . $file['savename'];
            }
            return $info;
        }
    }

    /*
     * 分页样式替换bootstrap
     */
    public function bootstrap_page_style($page_html)
    {
        if ($page_html) {
            $page_show = str_replace('<div>', '<nav><ul class="pagination">', $page_html);
            $page_show = str_replace('</div>', '</ul></nav>', $page_show);
            $page_show = str_replace('<span class="current">', '<li class="active"><a>', $page_show);
            $page_show = str_replace('</span>', '</a></li>', $page_show);
            $page_show = str_replace(array('<a class="num"', '<a class="prev"', '<a class="next"', '<a class="end"', '<a class="first"'), '<li><a', $page_show);
            $page_show = str_replace('</a>', '</a></li>', $page_show);
        }
        return $page_show;
    }

    /**
     * 二维码生成
     * @param $mes
     * @param null $url
     */
    public static function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint = false)
    {
        include '/Public/phpqrcpde/phpqrcode.php';
        $enc = QRencode::factory($level, $size, $margin);
        return $enc->encodePNG($text, $outfile, $saveandprint = false);
    }

}