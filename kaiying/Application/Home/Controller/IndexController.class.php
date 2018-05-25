<?php
namespace Home\Controller;
use Think\Controller;
use Think\Cache;
class IndexController extends Controller {
    public function index(){
        $newInfo = M('news')->where('Type="news" and Status >0')->order(array('Status'=>'DESC'))->limit(0,5)->select();
        $aboutCompany = M('news')->where('Type="company" and Status >0')->find();
        $PCImg = M('img')->where("Status>0 and Type='lg'")->order("Sort ASC")->select();
        $XSImg = M('img')->where("Status>0 and Type='xs'")->order("Sort ASC")->select();
        $this->assign('XSImg',$XSImg);
        $this->assign('PCImg',$PCImg);
        $this->assign('newInfo',$newInfo);
        $this->assign('aboutCompany',msubstr($aboutCompany['Content'], $start=0, 500, $charset="utf-8",$suffix=false));
        $this->assign('Title','首页 - 凯盈顾问集团');
        $this->display();
    }

    public function aboutUs(){
        $this->assign('Title','联系我们 - 大海凯盈');
        $this->display();
    }
    public function aboutUsSz(){
        $this->assign('Title','联系我们 - 大海凯盈');
        $this->display();
    }

    public function news(){
        import('ORG.Util.Page');
        $count = M('news')->where("Status > 0 and Status !=2 and Type = 'news'")->count();
        $Page = new \Think\Page($count,3);
        $NewsInfo = M('news')->field('ID,Title,remark,CoverImg,Status,UpdateTime')->where("Status > 0 and Status !=2 and Type = 'news'")->limit($Page->firstRow.','.$Page->listRows)->order('UpdateTime DESC')->select();
        $show = D('News')->bootstrap_page_style($Page->show());
        $this->assign('show', $show);
        $LeftNews = M('news')->where("Status = 2 and Type='news'")->Order('ID DESC')->find();
        $this->assign("NewsInfo",$NewsInfo);
        $this->assign("LeftNews",$LeftNews);
        $this->assign("Title","新闻中心 - 大海凯盈");
        $this->display();
    }

    public function NewsDetail(){
        $newID = intval($_GET["ID"]);
        if(!$newID){
            $this->alertMes("新闻下架了",U('Index/news'));
        }
        M('news')->where('ID ='.$newID)->setInc('ShowTimes');
        $NewsInfo = M('news')->where("ID = ".$newID." and Status > 0")->find();
        $lastID = M('news')->field('ID,Title')->where("Status > 0 and ID >".$newID)->find();
        $nextID = M('news')->field('ID,Title')->where("Status > 0 and ID <".$newID)->order('ID DESC')->find();
        $this->assign('LastID',$lastID);
        $this->assign('NextID',$nextID);
        $this->assign('NewsInfo',$NewsInfo);
        $this->assign("Title",$NewsInfo['Title']." - 大海凯盈");
        $this->display();
    }

    public function MediaReport(){
        import('ORG.Util.Page');
        $count = M('news')->where("Status > 0 and Status !=2 and Type ='media'")->count();
        $Page = new \Think\Page($count,3);
        $NewsInfo = M('news')->field('ID,Title,remark,CoverImg,Status,UpdateTime')->where("Status > 0 and Status !=2 and Type = 'media'")->limit($Page->firstRow.','.$Page->listRows)->order('UpdateTime DESC')->select();
        $show = D('News')->bootstrap_page_style($Page->show());
        $this->assign('show', $show);
        $LeftNews = M('news')->where("Status = 2 and Type ='media'")->Order('ID DESC')->find();
        $this->assign("NewsInfo",$NewsInfo);
        $this->assign("LeftNews",$LeftNews);
        $this->assign("Title","媒体报道 - 大海凯盈");
        $this->display();
    }

    public function MediaDetail(){
        $mediaID = intval($_GET["ID"]);
        if(!$mediaID){
            $this->alertMes("报道下架了",U('Index/news'));
        }
        M('news')->where('ID ='.$mediaID)->setInc('ShowTimes');
        $MediaInfo = M('news')->where("ID = ".$mediaID." and Status > 0 and Type='media'")->find();
        $lastID = M('news')->field('ID,Title')->where("Status > 0 and Type='media' and ID >".$mediaID)->find();
        $nextID = M('news')->field('ID,Title')->where("Status > 0 and Type='media' and ID <".$mediaID)->order('ID DESC')->find();
        $this->assign('LastID',$lastID);
        $this->assign('NextID',$nextID);
        $this->assign('NewsInfo',$MediaInfo);
        $this->assign("Title",$MediaInfo['Title']." - 大海凯盈");
        $this->display();
    }

    public function alertMes($mes, $url = null)
    {
        echo "<script>alert('{$mes}')</script>";
        if($url != null){
            echo "<script>window.location='{$url}'</script>";
            exit;
        }else{
            echo "<script>window.history.back();</script>";
            exit;
        }
    }


    public function BusinessCooperation(){
        $this->assign("Title","商务合作 - 大海凯盈");
        $this->display();
    }


    public function aboutCompany(){
        $info = M('news')->where("Type = 'company'")->find();
        $this->assign("info",$info);
        $this->assign("Title","公司概况 - 大海凯盈");
        $this->display();
    }


    public function lmessage(){
        if(!$_POST['workplace']){
            $this->alertMes("请输入所在单位");
        }
        if(!$_POST['name']){
            $this->alertMes("请输入姓名");
        }
        if(!$_POST['tel']){
            $this->alertMes("请输入联系方式");
        }
        if(!$_POST['content']){
            $this->alertMes("请输入留言内容");
        }
        $data['workplace'] = htmlspecialchars(trim($_POST['workplace']));
        $data['name'] = htmlspecialchars(trim($_POST['name']));
        $data['tel'] = htmlspecialchars(trim($_POST['tel']));
        $data['content'] = htmlspecialchars(trim($_POST['content']));
        $data['job'] = htmlspecialchars(trim($_POST['job']));
        $data['UpdateTime'] = time();
        $addRes = M('message')->add($data);
        if($addRes){
            $this->alertMes("提交成功",U("Index/BusinessCooperation"));
        }else{
            $this->alertMes("提交失败，请重试");
        }
    }


    public function ceoLan(){
        $this->assign("Title","董事长致辞 - 大海凯盈");
        $this->display();
    }

    public function showProject(){
        if($_GET['S'] && $_GET['S'] != '所有项目'){
            $Status = htmlentities(trim($_GET['S']));
            $str = 'and Statu ="'.$Status.'"';
        }else{
            $str = '';
        }
        $Pinfo = M('project')->where('Top = 0 and Type="大海凯盈"'.$str)->order('ord DESC')->select();
        $Topinfo = M('project')->where('Top = 1 and Type="大海凯盈"')->order('ord DESC')->select();
        $this->assign("Topinfo",$Topinfo);
        $this->assign("Pinfo",$Pinfo);
        $this->assign("Title","项目展示 - 大海凯盈");
        $this->display();
    }
    public function showProjectDetail(){
        $PID = intval($_GET['ID']);
        $Pinfo = M('project')->where('ID ='.$PID)->find();
        $ImgArr = explode(',',substr($Pinfo['ImgArr'],0,strlen($Pinfo['ImgArr'])-1));
        $this->assign("ImgArr",$ImgArr);
        $this->assign("Pinfo",$Pinfo);
        $this->assign("Title","项目展示 - 大海凯盈");
        $this->display();
    }

    public function showProjectky(){
        $Pinfo = M('project')->where('Top = 0 and Type="凯盈集团"')->order('ord DESC')->select();
        $Topinfo = M('project')->where('Top = 1 and Type="凯盈集团"')->order('ord DESC')->select();
        $this->assign("Topinfo",$Topinfo);
        $this->assign("Pinfo",$Pinfo);
        $this->assign("Title","项目展示 - 大海凯盈");
        $this->display();
    }

    public function showProjectzd(){
        $Pinfo = M('project')->where('Top = 0 and Type="大海智地"')->order('ord DESC')->select();
        $Topinfo = M('project')->where('Top = 1 and Type="大海智地"')->order('ord DESC')->select();
        $this->assign("Topinfo",$Topinfo);
        $this->assign("Pinfo",$Pinfo);
        $this->assign("Title","项目展示 - 大海凯盈");
        $this->display();
    }

    public function detail(){
        $PID = intval($_POST['PID']);
        if(!$PID){
            $this->ajaxReturn(array('status'=>0,'info'=>'加载失败，请重试')) ;
        }
        $Pinfo = M('project')->where('ID = '.$PID)->find();
        if($Pinfo){
            $data = array('status'=>1,'info'=>$Pinfo['content'],'Title'=>$Pinfo['Title']);
            $this->ajaxReturn($data);
        }else{
            $this->ajaxReturn(array('status'=>0,'info'=>'加载失败，请重试'));
        }
    }

    public function management(){
        $level = $_GET['level']?intval($_GET['level']):1;
        $manageInfo = M('manage')->where("level = ".$level.' and Status > 0')->select();
        $headTitle = M('manage')->field('level,position')->where('Status > 0')->group('position')->order('level ASC')->select();
        $this->assign("level",$level);
        $this->assign("headTitle",$headTitle);
        $this->assign("manageInfo",$manageInfo);
        $this->assign("Title","管理团队 - 大海凯盈");
        $this->display();
    }

    public function CoreAdvantage(){
        $CArr = M('core')->order('ID ASC')->select();
        $this->assign("CArr",$CArr);
        $this->assign("Title","核心优势 - 大海凯盈");
        $this->display();
}

    public function serverobj(){
        $LSArr = M('serverobj')->order('ID ASC')->select();
        $this->assign("LSArr",$LSArr);
        $this->assign("Title","服务对象 - 大海凯盈");
        $this->display();
    }

    public function businessone(){
        $this->assign("Title","业务范畴 - 大海凯盈");
        $this->display();
    }

    public function businesstwo(){
        $this->assign("Title","业务范畴 - 大海凯盈");
        $this->display();
    }

    public function businessthr(){
        $this->assign("Title","业务范畴 - 大海凯盈");
        $this->display();
    }

    public function businessfou(){
        $this->assign("Title","业务范畴 - 大海凯盈");
        $this->display();
    }

    public function businessfiv(){
        $this->assign("Title","业务范畴 - 大海凯盈");
        $this->display();
    }

    public function businesssix(){
        $this->assign("Title","业务范畴 - 大海凯盈");
        $this->display();
    }

    public function businesssev(){
        $this->assign("Title","业务范畴 - 大海凯盈");
        $this->display();
    }

    public function video(){
        if($_GET['ID']){
            $data['ID'] = intval($_GET['ID']);
        }else{
            $data = array();
        }
        $curVideo = M('video')->where($data)->order('ID ASC')->find();
        $curVideoArr = M('video')->order('ID ASC')->select();
        $this->assign("video",$curVideo);
        $this->assign("videoArr",$curVideoArr);
        $this->assign("Title","视频中心 - 大海凯盈");
        $this->display();
    }

    public function search(){
        $str = htmlspecialchars(trim($_GET['ss']));
        if(!$str){
            $this->alertMes("请输入搜索关健字");
        }
        $searchRes = M('news')->field('ID,Title,CoverImg,remark,UpdateTime')->where("Title like '%".$str."%' and Status >0")->select();
        $this->assign('res',$searchRes);
        $this->assign("Title","搜索结果 - 大海凯盈");
        $this->display();
    }

    public function law(){
        $this->assign("Title","法律声明 - 大海凯盈");
        $this->display();
    }
}