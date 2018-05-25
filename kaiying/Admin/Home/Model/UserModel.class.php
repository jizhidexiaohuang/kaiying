<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    Public function makePage($count,$num=10){
        import('ORG.Util.Page');
        $Page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数
        $Page -> setConfig('header','共'.$count.'条');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共'.$count/$num.'页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

        $show = $Page->show();// 分页显示输出
        return $show;
    }

    /**
     * 图片上传
     * @param $files
     * @param int $Size
     * @return array
     */
    public function ImgUpload($files,$Size=2){
        $Upload = array();
        foreach($files['tmp_name'] as $k=>$v){
            if ((($files["type"][$k] == "image/png") || ($files["type"][$k] == "image/gif") || ($files["type"][$k] == "image/jpeg") || ($files["type"][$k] == "image/pjpeg")) && ($files["size"][$k] < $Size*1024*1024))
            {
                if ($files["file"][$k] > 0)
            {
                continue;
            }else{
                    if (file_exists($_SERVER['DOCUMENT_ROOT']."/Public/upload/".$_COOKIE['UserID'].$files["name"][$k]))
                {
                    continue;
                }
                else
                {
                    if(move_uploaded_file($files["tmp_name"][$k],$_SERVER['DOCUMENT_ROOT']."/Public/upload/".$_COOKIE['UserID'].basename($files["name"][$k]))){
                        $Upload[$k] = "/Public/upload/".$_COOKIE['UserID'].$files["name"][$k];
                    }else{
                        continue;
                    }
                }
                }
            }else{
                continue;
            }
        }
        return $Upload;
    }

    public function GetIP(){
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
            $ip = getenv("REMOTE_ADDR");
        else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
            $ip = $_SERVER['REMOTE_ADDR'];
        else
            $ip = "unknown";
        return($ip);
    }
}