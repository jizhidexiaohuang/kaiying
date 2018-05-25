<?php
/**
 * Created by PhpStorm.
 * User: huangwj
 * Date: 2017/9/15
 * Time: 17:38
 */

    $extensions = array("jpg","bmp","gif","png");
    $uploadFilename = $_FILES['upload']['name'];
    $extension = pathInfo($uploadFilename,PATHINFO_EXTENSION);
    if(in_array($extension,$extensions)){
        $uploadPath = str_replace("\\",'/',realpath(__ROOT__))."/uploads/";
        $uuid = str_replace('.','',uniqid("",TRUE)).".".$extension;
        $desname = $uploadPath.$uuid;
        $previewname = '/uploads/'.$uuid;
        $tag = move_uploaded_file($_FILES['upload']['tmp_name'],$desname);
        $callback = $_REQUEST["CKEditorFuncNum"];
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callback,'".$previewname."','');</script>";
    }else{
        echo "<font color=\"red\"size=\"2\">*文件格式不正确（必须为.jpg/.gif/.bmp/.png文件）</font>";
    }
