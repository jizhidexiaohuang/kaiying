<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $newsC = M('news')->where('Type ="news" and Status > 0')->count();
        $newsAllC = M('news')->field('sum(ShowTimes) as s')->where('Type ="news" and Status > 0')->find();
        $mediaC = M('news')->where('Type ="media" and Status > 0')->count();
        $mediaAllC = M('news')->field('sum(ShowTimes) as s')->where('Type ="media" and Status > 0')->find();
        $this->assign('newC',$newsC);
        $this->assign('newAllC',$newsAllC['s']);
        $this->assign('mediaC',$mediaC);
        $this->assign('mediaAllC',$mediaAllC['s']);
        $this->assign('Title',"大海凯盈管理后台");
        $this->display();
    }

    public function lunboList(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $data=array();
        $Type = trim($_GET['Type']);
        if($Type){
            $data['Type'] = $Type;
        }
        switch ($Type){
            case 'lg':
                $this->assign('st',"PC端");
                break;
            case 'xs':
                $this->assign('st',"移动端");
                break;
            default:
                $this->assign('st',"全部");
                break;
        }
        $ImgArr = M('img')->where($data)->order('Sort ASC')->select();
        $this->assign('ImgArr',$ImgArr);
        $this->assign('Title',"轮播图管理-大海凯盈");
        $this->display();
    }

    public function ImgEdit(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if($_POST){
            M()->startTrans();
            $count = M('img')->count();
            $data['ImgName'] = htmlspecialchars(trim($_POST['Title']));
            $data['Sort'] = intval($_POST['sort']);
            $data['Type'] = htmlspecialchars(trim($_POST['Type']));
            $data['Url'] = htmlspecialchars(trim($_POST['UrlA']));
            $data['Status'] = 1;
            if ($_FILES['CoverImg']['name']) {
                $data['ImgUrl'] = D('News')->Imgupload();
            }
            $ImgID = intval($_POST['ImgID']);
            $edit = intval($_POST['edit']);
            $BigSort = M('img')->field("Sort")->order('Sort DESC')->find();
            if($ImgID && $edit==1){
                $nowSort = M('img')->where("Id=".$ImgID)->getField('Sort');
                if(($nowSort != $data['Sort']) && $data['Sort']<$BigSort['Sort']){
                    $swap = M('img')->where("Sort = ".$data['Sort'])->save(array('Sort'=>$nowSort));
                }
                $res = M('img')->where('ID = '.$ImgID)->save($data);
            }else{
                if(!$data['Sort']){
                    $data['Sort']= $BigSort['Sort']+1;
                }else if($data['Sort']>$BigSort['Sort']){
                    $data['Sort']= $data['Sort'];
                }else{
                    $swap = M('img')->where("Sort = ".$data['Sort'])->save(array('Sort'=>$BigSort['Sort']+1));
                }
                $res = M('img')->where('ID = '.$ImgID)->add($data);
            }
            if($res===false){
                M()->rollback();
                $this->alertMes("操作失败，请刷新重试");
            }else{
                M()->commit();
                $this->alertMes("操作成功",U('Index/lunboList'));
            }
        }else{
            $ImgID = intval($_GET['ID']);
            if($ImgID){
                $ImgInfo = M('img')->where('ID = '.$ImgID)->find();
                $this->assign('ImgInfo',$ImgInfo);
                $this->assign('ImgID',$ImgID);
                $this->assign('edit',1);
            }
            $this->assign('Title',"轮播图编辑-大海凯盈");
            $this->display();
        }
    }

    public function message(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $where = "Status = 0";
        if(isset($_GET['Status'])){
            $where = " Status = ".intval($_GET['Status']);
        }
        import('ORG.Util.Page');// 导入分页类
        $count = M('message')->where($where)->count();
        $Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数
         $show = D('News')->bootstrap_page_style($Page->show());// 分页显示输出
        $this->assign('show', $show);
        $messageInfo = M('message')->where($where)->order("ID DESC")->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('messageInfo',$messageInfo);
        $this->assign('Title',"商务合作留言-大海凯盈");
        $this->display();
    }

    public function messageStatusChange(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $MessID = intval($_GET['messageID']);
        if(!$MessID){
            $this->alertMes("操作失败，请重试");
        }
        $ChangeStatusRes = M('message')->where("ID = ".$MessID)->save(array('Status'=>1));
        if($ChangeStatusRes){
            $this->alertMes("操作成功",U('Index/message'));
        }else{
            $this->alertMes("操作失败，请重试");
        }
    }

    public function aboutC(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $Info = M('news')->where("Type = 'company'")->find();
        $this->assign('info',$Info);
        $this->assign('Title',"公司概况-大海凯盈");
        $this->display();
    }

    public function saveCompany(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if($_POST){
            $data['Content'] = $_POST['Content'];
        }
        if($_FILES['CoverImg']['name']){
            $data['CoverImg'] = D('News')->ImgUpload();
        }
        $res = M('news')->where("Type = 'company'")->save($data);
        if($res){
            $this->alertMes("更新公司概况成功",U('Index/aboutC'));
        }else{
            $this->alertMes("更新公司概况失败,请重试");
        }
    }

    public function manageList(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $UserInfo = M('manage')->order('level ASC')->select();
        $this->assign('Ulist',$UserInfo);
        $this->assign('Title',"管理团队-大海凯盈");
        $this->display();
    }

    public function manageAdd(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        if($_POST){
            $data['content'] = $_POST['Content'];
            if($_FILES['imgUrl']['name']){
                move_uploaded_file($_FILES['imgUrl']['tmp_name'], './Public/uploads/' . $_FILES['imgUrl']['name']);
                $images_name ='/Public/uploads/' . $_FILES['imgUrl']['name'];
                $data['imgUrl'] = $images_name;
            }
            if($_FILES['imgUrlMob']['name']){
                move_uploaded_file($_FILES['imgUrlMob']['tmp_name'], './Public/uploads/' . $_FILES['imgUrlMob']['name']);
                $images_name ='/Public/uploads/' . $_FILES['imgUrlMob']['name'];
                $data['imgUrlMob'] = $images_name;
            }
                $data['position'] = htmlspecialchars(trim($_POST['position']));
                $data['names'] = htmlspecialchars(trim($_POST['names']));
            if($_POST['level']){
                $data['level'] = intval($_POST['level']);
            }
            if(isset($_POST['Status'])){
                $data['Status'] = intval($_POST['Status']);
            }
            $data['UpdateTime'] = time();
            if($_POST['type'] == 1){
                $UserID = intval($_POST['UID']);
                if(!$UserID){
                    $this->alertMes("操作失败,请重试",U('Index/manageList'));
                }
                $res =M('manage')->where("ID =".$UserID)->save($data);
                $str = '修改';
            }else{
                $res =M('manage')->add($data);
                $str = '添加';
            }
            if($res){
                $this->alertMes($str."成功",U('Index/manageList'));
            }else{
                $this->alertMes($str."失败，请重试");
            }
        }else{
            if($_GET['ID']){
                $UID = intval($_GET['ID']);
                $UserInfo = M('manage')->where('ID = '.$UID)->find();
                $this->assign('User',$UserInfo);
                if(intval($_GET['type']) == 1){
                    $this->assign('type',1);
                }
                $this->assign('str','编辑');

            }else{
                $this->assign('str','添加');
            }
            $this->assign('Title',"管理团队-大海凯盈");
            $this->display();
        }
    }

    public function manageChange(){
        if(!$this->checkLogin()){
            $this->error("登录过期，请重新登录",U('User/login'));
        }
        $mid = intval($_GET['ID']);
        $status = intval($_GET['status']);
        if(!$mid || !isset($_GET['status'])){
            $this->alertMes("操作失败，请刷新重试",U('Index/manageList'));
        }
        $res = M('manage')->where('ID ='.$mid)->save(array('Status'=>$status));
        if($res){
            $this->alertMes("操作成功",U('Index/manageList'));
        }else{
            $this->alertMes("操作失败，请刷新重试 ",U('Index/manageList'));
        }
    }

    public function ImgChangeStatu(){
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        $ImgID = intval($_GET['ImgID']);
        if ($ImgID) {
            $res = M('img')->where('ID =' . $ImgID)->delete();
            if ($res) {
                $this->alertMes("操作成功",U('Index/lunboList'));
            } else {
                $this->alertMes("操作失败,请重试");
            }
        }else{
            $this->alertMes("操作失败,请刷新重试");
        }
    }

    public function Core(){
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        $CArr = M('core')->select();
        $this->assign('CArr',$CArr);
        $this->assign('Title',"核心优势-大海凯盈");
        $this->display();
    }

    public function CoreEdit(){
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        if($_POST){
            $data['Title'] = htmlspecialchars(trim($_POST['Title']));
            if(!$data['Title']){
                $this->alertMes("请输入标题");
            }
            $data['Content'] = trim($_POST['Content']);
            if(!$data['Content']){
                $this->alertMes("请输入详细介绍");
            }
            if($_FILES['CoverImg']['name']){
                $data['Img'] = D('News')->Imgupload();
            }
            $data['UpdateTime'] = time();
            if($_POST['CID']){
                $CID = intval($_POST['CID']);
               $res = M('core')->where('ID ='.$CID)->save($data);
               $str = '修改';
            }else{
                $res = M('core')->add($data);
                $str = '添加';
            }
            if($res){
                $this->alertMes($str."成功",U('Index/Core'));
            }else{
                $this->alertMes($str."失败，请重试");
            }
        }else{
            if($_GET['CID']){
                $CID = intval($_GET['CID']);
                $CInfo = M('core')->where("ID =".$CID)->find();
                $this->assign('CInfo',$CInfo);
            }
            $this->assign('Title',"核心优势编辑-大海凯盈");
            $this->display();
        }
    }

    public function delCore(){
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        if($_GET['CID']){
            $CID = intval($_GET['CID']);
            $res = M('core')->where('ID = '.$CID)->delete();
            if($res){
                $this->alertMes('删除成功',U('Index/Core'));
            }else{
                $this->alertMes('删除失败，请重试',U('Index/Core'));
            }
        }else{
            $this->alertMes("操作失败，请重试",U('Index/Core'));
        }
    }

    public function serverobj(){
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        $SArr = M('serverobj')->select();
        $this->assign('SArr',$SArr);
        $this->assign('Title',"服务对象-大海凯盈");
        $this->display();
    }

    public function serverEdit(){
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        if($_POST){
            $data['Title'] = htmlspecialchars(trim($_POST['Title']));
            $data['Content'] = trim($_POST['Content']);
            $data['Content2'] = trim($_POST['Content2']);
            $data['UpdateTime'] = time();
            if($_FILES['CoverImg']['name']){
                $data['Img'] = D('News')->Imgupload();
            }
            if($_POST['SID']){
               $SID = intval($_POST['SID']);
               $res = M('serverobj')->where('ID ='.$SID)->save($data);
               $str = "修改";
            }else{
                $res = M('serverobj')->add($data);
                $str ='添加';
            }
            if($res){
                $this->alertMes($str."成功",U('Index/serverobj'));
            }else{
                $this->alertMes($str."失败，请重试",U('Index/serverobj'));
            }
        }else{
            if($_GET['SID']){
                $SID = intval($_GET['SID']);
                $SInfo = M('serverobj')->where("ID =".$SID)->find();
                $this->assign('SInfo',$SInfo);
            }
            $this->assign('Title',"服务对象-大海凯盈");
            $this->display();
        }
    }

    public function delServer(){
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        if($_GET['SID']){
            $SID = intval($_GET['SID']);
            $res = M('serverobj')->where('ID = '.$SID)->delete();
            if($res){
                $this->alertMes('删除成功',U('Index/serverobj'));
            }else{
                $this->alertMes('删除失败，请重试',U('Index/serverobj'));
            }
        }else{
            $this->alertMes("操作失败，请重试",U('Index/serverobj'));
        }
    }
}