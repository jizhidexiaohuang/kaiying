<?php

namespace Home\Controller;

use Think\Controller;

class NewsController extends BaseController
{
    public function NewsList()
    {
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        $where = "Type = 'news' ";
        if (isset($_GET['SearchWord'])) {
            $SearchWord = trim($_GET['SearchWord']);
            $where .= " and Title like '%" . $SearchWord . "%'";
            $this->assign('serachWord', $SearchWord);
        }
        $statuStr = "所有新闻";
        if (isset($_GET['statu'])) {
            $statu = intval($_GET['statu']);
            $where .= " and Status = " . $statu;
            switch ($statu) {
                case -1:
                    $statuStr = "回收站";
                    break;
                case 0:
                    $statuStr = "未上线";
                    break;
                case 1:
                    $statuStr = "上线中";
                    break;
                case 2:
                    $statuStr = "推荐";
                    break;
            }
            $this->assign('statu', $statu);
        } else {
            $where .= " and Status >-1";
        }
        $this->assign('statuStr', $statuStr);
        import('ORG.Util.Page');// 导入分页类
        $count = M('news')->where($where)->count();
        $Page = new \Think\Page($count, 6);// 实例化分页类 传入总记录数
        $NewsList = M('news')->field('ID,Title,CoverImg,Status')->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->order('ID DESC')->select();
        $show = D('News')->bootstrap_page_style($Page->show());// 分页显示输出
        $this->assign('show', $show);
        $this->assign('newsinfo', $NewsList);
        $this->assign("Title", "新闻列表-大海凯盈");
        $this->display();
    }

    public function NewsEdit()
    {
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        if ($_POST) {
            M()->startTrans();
            $data['Title'] = htmlspecialchars(trim($_POST['Title']));
            if (!$data['Title']) {
                $this->alertMes("请输入标题");
            }
            $data['remark'] = trim($_POST['remark']);
            if (!$data['remark']) {
                $this->alertMes("请填写摘要");
            }
            if ($_FILES['CoverImg']['name']) {
                $data['CoverImg'] = D('News')->Imgupload();
            }
            $data['Promulgator'] = htmlspecialchars(trim($_POST['Promulgator']));
            if (!$data['Promulgator']) {
                $this->alertMes("请填写发布者");
            }
            $data['ShowTimes'] = intval($_POST['ShowTimes'])?intval($_POST['ShowTimes']):1065;
            $data['Content'] = $_POST['Content'];
            if (!$data['Content']) {
                $this->alertMes("请填写内容");
            }
            $data['Status'] = intval($_POST['Status']) ? intval($_POST['Status']) : 1;
            $data['UpdateTime'] = time();
            if ($data['Status'] == 2) {
                $LeftNews = M('news')->where("Status = 2")->select();
                if ($LeftNews) {
                    $LeftCancel = D('news')->where("Status = 2")->save(array('Status' => 1));
                    if (!$LeftCancel) {
                        M()->rollback();
                        $this->alertMes("操作失败,请重试");
                    }
                }
            }
            if ($_POST['NewID']) {
                $newsID = intval($_POST['NewID']);
                $res = M('news')->where("ID =" . $newsID)->save($data);
            } else {
                $data['Type'] = 'news';
                $res = D('news')->add($data);
            }
            if ($res) {
                M()->commit();
                $this->alertMes("发布成功", U('News/NewsList'));
            } else {
                M()->rollback();
                $url = U("News/NewsEdit");
                $this->alertMes("发布失败，请重试", $url);
            }
        } else {
            if ($_GET['ID']) {
                $newsID = intval($_GET['ID']);
                $newsInfo = M('news')->where("ID = " . $newsID)->find();
                if ($newsInfo) {
                    $this->assign('editID', $newsID);
                    $this->assign('NewsInfo', $newsInfo);
                }
            }
            $this->assign("Title", "新闻编辑-大海凯盈");
            $this->display();
        }
    }

    public function NewsChangeStatu()
    {
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        M()->startTrans();
        if ($_GET['NewID'] && isset($_GET['statu'])) {
            $newID = intval($_GET['NewID']);
            $statu = intval($_GET['statu']);
            $changeRes = D('news')->where('ID = ' . $newID)->save(array('Status' => $statu));
            if (!$changeRes) {
                M()->rollback();
                $this->alertMes("操作失败,请重试");
            }
            if ($statu == 2) {
                $LeftNews = D('news')->where("ID !=" . $newID . " and Status = 2 and Type = 'news'")->select();
                if ($LeftNews) {
                    $LeftCancel = D('news')->where("ID !=" . $newID . " and Status = 2 and Type = 'news'")->save(array('Status' => 1));
                    if (!$LeftCancel) {
                        M()->rollback();
                        $this->alertMes("操作失败,请重试");
                    }
                }
            }
            if (M()->commit()) {
                $this->alertMes("操作成功", U('News/NewsList'));
            } else {
                $this->alertMes("操作失败,请重试");
            }
        } else {
            $this->alertMes("操作失败,请重试");
        }
    }

    public function MediaReportList()
    {
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        $where = "Type = 'media'";
        if (isset($_GET['SearchWord'])) {
            $SearchWord = trim($_GET['SearchWord']);
            $where .= " and Title like '%" . $SearchWord . "%'";
            $this->assign('serachWord', $SearchWord);
        }
        $statuStr = "所有新闻";
        if (isset($_GET['statu'])) {
            $statu = intval($_GET['statu']);
            $where .= " and Status = " . $statu;
            switch ($statu) {
                case -1:
                    $statuStr = "回收站";
                    break;
                case 0:
                    $statuStr = "未上线";
                    break;
                case 1:
                    $statuStr = "上线中";
                    break;
                case 2:
                    $statuStr = "推荐";
                    break;
            }
            $this->assign('statu', $statu);
        } else {
            $where .= " and Status >-1";
        }
        $this->assign('statuStr', $statuStr);
        import('ORG.Util.Page');// 导入分页类
        $count = M('news')->where($where)->count();
        $Page = new \Think\Page($count, 12);// 实例化分页类 传入总记录数
        $NewsList = M('news')->field('ID,Title,CoverImg,Status')->where($where)->limit($Page->firstRow . ',' . $Page->listRows)->order('ID DESC')->select();
        $show = D('News')->bootstrap_page_style($Page->show());// 分页显示输出
        $this->assign('show', $show);
        $this->assign('newsinfo', $NewsList);
        $this->assign("Title", "媒体报道-大海凯盈");
        $this->display();
    }

    public function MediaChangeStatu()
    {
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        M()->startTrans();
        if ($_GET['NewID'] && isset($_GET['statu'])) {
            $newID = intval($_GET['NewID']);
            $statu = intval($_GET['statu']);
            $changeRes = M('news')->where('ID = ' . $newID)->save(array('Status' => $statu));
            if (!$changeRes) {
                M()->rollback();
                $this->alertMes("操作失败,请重试");
            }
            if ($statu == 2) {
                $LeftNews = M('news')->where("ID !=" . $newID . " and Status = 2 and Type = 'media'")->select();
                if ($LeftNews) {
                    $LeftCancel = M('news')->where("ID !=" . $newID . " and Status = 2 and Type = 'media'")->save(array('Status' => 1));
                    if (!$LeftCancel) {
                        M()->rollback();
                        $this->alertMes("操作失败,请重试");
                    }
                }
            }
            if (M()->commit()) {
                $this->alertMes("操作成功", U('News/MediaReportList'));
            } else {
                $this->alertMes("操作失败,请重试");
            }
        } else {
            $this->alertMes("操作失败,请重试");
        }
    }

    public function MediaReportEdit()
    {
        if (!$this->checkLogin()) {
            $this->error("登录过期，请重新登录", U('User/login'));
        }
        if ($_POST) {
            M()->startTrans();
            $data['Title'] = htmlspecialchars(trim($_POST['Title']));
            if (!$data['Title']) {
                $this->alertMes("请输入标题");
            }
            $data['remark'] = trim($_POST['remark']);
            if (!$data['remark']) {
                $this->alertMes("请填写摘要");
            }
            if ($_FILES['CoverImg']['name']) {
                $data['CoverImg'] = D('News')->Imgupload();
            }
            $data['Promulgator'] = htmlspecialchars(trim($_POST['Promulgator']));
            if (!$data['Promulgator']) {
                $this->alertMes("请填写发布者");
            }
            $data['ShowTimes'] = intval($_POST['ShowTimes'])?intval($_POST['ShowTimes']):1065;
            $data['Content'] = $_POST['Content'];
            if (!$data['Content']) {
                $this->alertMes("请填写内容");
            }
            $data['Status'] = intval($_POST['Status']) ? intval($_POST['Status']) : 1;
            $data['UpdateTime'] = time();
            if ($data['Status'] == 2) {
                $LeftNews = M('news')->where("Status = 2")->select();
                if ($LeftNews) {
                    $LeftCancel = M('news')->where("Status = 2")->save(array('Status' => 1));
                    if (!$LeftCancel) {
                        M()->rollback();
                        $this->alertMes("操作失败,请重试");
                    }
                }
            }
            if ($_POST['mediaID']) {
                $newsID = intval($_POST['mediaID']);
                $res = M('news')->where("ID =" . $newsID)->save($data);
            } else {
                $data['Type'] = 'media';
                $res = M('news')->add($data);
            }
            if ($res) {
                M()->commit();
                $this->alertMes("发布成功", U('News/MediaReportList'));
            } else {
                M()->rollback();
                $this->alertMes("发布失败，请重试");
            }
        } else {
            if ($_GET['ID']) {
                $newsID = intval($_GET['ID']);
                $newsInfo = M('news')->where("ID = " . $newsID)->find();
                if ($newsInfo) {
                    $this->assign('editID', $newsID);
                    $this->assign('NewsInfo', $newsInfo);
                }
            }
            $this->assign("Title", "新闻编辑-大海凯盈");
            $this->display();
        }
    }
}