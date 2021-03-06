<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($Title); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/Public/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/Public/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/Public/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/Public/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/Public/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/Public/AdminLTE/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/Public/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/Public/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/Public/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/Public/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- jQuery 3 -->
    <script src="/Public/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="/Public/bootstrap/fileinput/fileinput.css"/>
    <style type="text/css">
        .modal-backdrop.in{display:none;}
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo U('Index/index');?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>大海凯盈后台管理系统</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"><?php echo ($msgcount); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">商务合作有<?php echo ($msgcount); ?>条留言</li>
                            <li class="footer"><a href="<?php echo U('Index/message');?>">查看留言</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <!--<li class="dropdown notifications-menu">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                            <!--<i class="fa fa-bell-o"></i>-->
                            <!--<span class="label label-warning">10</span>-->
                        <!--</a>-->
                        <!--<ul class="dropdown-menu">-->
                            <!--<li class="header">You have 10 notifications</li>-->
                            <!--<li>-->
                                <!--&lt;!&ndash; inner menu: contains the actual data &ndash;&gt;-->
                                <!--<ul class="menu">-->
                                    <!--<li>-->
                                        <!--<a href="#">-->
                                            <!--<i class="fa fa-users text-aqua"></i> 5 new members joined today-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<a href="#">-->
                                            <!--<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the-->
                                            <!--page and may cause design problems-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<a href="#">-->
                                            <!--<i class="fa fa-users text-red"></i> 5 new members joined-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<a href="#">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> 25 sales made-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<a href="#">-->
                                            <!--<i class="fa fa-user text-red"></i> You changed your username-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</li>-->
                            <!--<li class="footer"><a href="#">View all</a></li>-->
                        <!--</ul>-->
                    <!--</li>-->
                    <!-- Tasks: style can be found in dropdown.less -->
                    <!--<li class="dropdown tasks-menu">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                            <!--<i class="fa fa-flag-o"></i>-->
                            <!--<span class="label label-danger">9</span>-->
                        <!--</a>-->
                        <!--<ul class="dropdown-menu">-->
                            <!--<li class="header">You have 9 tasks</li>-->
                            <!--<li>-->
                                <!--&lt;!&ndash; inner menu: contains the actual data &ndash;&gt;-->
                                <!--<ul class="menu">-->
                                    <!--<li>&lt;!&ndash; Task item &ndash;&gt;-->
                                        <!--<a href="#">-->
                                            <!--<h3>-->
                                                <!--Design some buttons-->
                                                <!--<small class="pull-right">20%</small>-->
                                            <!--</h3>-->
                                            <!--<div class="progress xs">-->
                                                <!--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"-->
                                                     <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                                                    <!--<span class="sr-only">20% Complete</span>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                                    <!--<li>&lt;!&ndash; Task item &ndash;&gt;-->
                                        <!--<a href="#">-->
                                            <!--<h3>-->
                                                <!--Create a nice theme-->
                                                <!--<small class="pull-right">40%</small>-->
                                            <!--</h3>-->
                                            <!--<div class="progress xs">-->
                                                <!--<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"-->
                                                     <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                                                    <!--<span class="sr-only">40% Complete</span>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                                    <!--<li>&lt;!&ndash; Task item &ndash;&gt;-->
                                        <!--<a href="#">-->
                                            <!--<h3>-->
                                                <!--Some task I need to do-->
                                                <!--<small class="pull-right">60%</small>-->
                                            <!--</h3>-->
                                            <!--<div class="progress xs">-->
                                                <!--<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"-->
                                                     <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                                                    <!--<span class="sr-only">60% Complete</span>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                                    <!--<li>&lt;!&ndash; Task item &ndash;&gt;-->
                                        <!--<a href="#">-->
                                            <!--<h3>-->
                                                <!--Make beautiful transitions-->
                                                <!--<small class="pull-right">80%</small>-->
                                            <!--</h3>-->
                                            <!--<div class="progress xs">-->
                                                <!--<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"-->
                                                     <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                                                    <!--<span class="sr-only">80% Complete</span>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                                <!--</ul>-->
                            <!--</li>-->
                            <!--<li class="footer">-->
                                <!--<a href="#">View all tasks</a>-->
                            <!--</li>-->
                        <!--</ul>-->
                    <!--</li>-->
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo ($UserInfo['HeadImg']); ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo ($UserInfo['UserName']); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo ($UserInfo['HeadImg']); ?>" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo ($UserInfo['Type']); ?>
                                    <small><?php echo ($UserInfo['Position']); ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">用户中心</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo U('User/logout',array('UserID'=>$_COOKIE['UserID']));?>" class="btn btn-default btn-flat">退出登录</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel margin-bottom">
                <div class="pull-left image">
                    <img src="<?php echo ($UserInfo["HeadImg"]); ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo ($UserInfo["UserName"]); ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <!--<form action="#" method="get" class="sidebar-form">-->
                <!--<div class="input-group">-->
                    <!--<input type="text" name="q" class="form-control" placeholder="Search...">-->
                    <!--<span class="input-group-btn">-->
                <!--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
                <!--</button>-->
              <!--</span>-->
                <!--</div>-->
            <!--</form>-->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">主菜单</li>
                <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($fid == $vo['id']): ?><li class="active treeview">
                        <?php else: ?>
                        <li class="treeview"><?php endif; ?>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span><?php echo ($vo["AuthName"]); ?></span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if($navID == $voo['id']): ?><li class="active">
                                        <?php else: ?>
                                    <li><?php endif; ?>
                                <a href="<?php echo U($voo['Url'],array('nav'=>$voo['id']));?>"><i class="fa fa-circle-o"></i><?php echo ($voo["AuthName"]); ?></a></li>
                                <!--<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>--><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
<script type="text/javascript" charset="utf-8" src="/Public/bootstrap/fileinput/fileinput.js"></script>
<script src="/Public/bootstrap/fileinput/fileinput.zh.js"></script>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo ($str); ?>管理员
            <small>管理员管理</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><i class="fa fa-dashboard"></i> 用户管理</li>
            <li class="active"><?php echo ($str); ?>管理员</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <form action="<?php echo U('User/add');?>" method="post" enctype="multipart/form-data">
                    <div class="box box-success">
                        <div class="box-header"><h3 class="box-title"><i class="fa fa-plus"></i> <?php echo ($str); ?>管理员</h3></div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="UserName">管理员账号</label>
                                <input class="form-control" type="text" name="UserName" id="UserName"
                                       value="<?php echo ($User['UserName']); ?>"
                                       placeholder="请输入用户名">
                            </div>
                            <?php if($type != 1): ?><div class="form-group">
                                    <label for="PassWord">密码</label>
                                    <input class="form-control" type="password" name="PassWord" id="PassWord"
                                           value=""
                                           placeholder="请输入密码">
                                </div><?php endif; ?>


                            <div class="form-group">
                                <label for="Mobile">手机号码</label>
                                <input class="form-control" type="number" name="Mobile" id="Mobile"
                                       value="<?php echo ($User['Mobile']); ?>"
                                       placeholder="请输入手机号码">
                            </div>
                            <div class="form-group">
                                <label for="NickName">真实姓名</label>
                                <input class="form-control" type="text" name="TrueName" id="TrueName"
                                       value="<?php echo ($User['TrueName']); ?>"
                                       placeholder="请输入真实姓名">
                            </div>
                            <div class="form-group">
                                <label for="NickName">部门</label>
                                <input class="form-control" type="text" name="Department" id="Department"
                                       value="<?php echo ($User['Department']); ?>"
                                       placeholder="请输入部门">
                            </div>
                            <div class="form-group">
                                <label for="NickName">职位</label>
                                <input class="form-control" type="text" name="Position" id="Position"
                                       value="<?php echo ($User['Position']); ?>"
                                       placeholder="请输入职位">
                            </div>
                            <div class="form-group">
                                <label>用户头像</label>
                                <input id="file" name="CoverImg" type="file" data-show-caption="true">
                                <p class="help-block">支持jpg、jpeg、png格式，大小不超过2.0M</p>
                            </div>
                            <div class="row">
                                <?php if($type == 1): ?>当前头像:<span style="color:#F00"></span><img src="<?php echo ($User["HeadImg"]); ?>"
                                width="100px"/><?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="Status">用户状态</label>
                                <select class="form-control " name="Status" id="Status">
                                    <option value="0"
                                    <?php if($User["status"] == 0): ?>selected<?php endif; ?>
                                    >禁用</option>
                                    <option value="1"
                                    <?php if($User["status"] == 1): ?>selected<?php endif; ?>
                                    >启用</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Sex">性别</label>
                                <select class="form-control " name="Sex" id="Sex">
                                    <option value="0"
                                    <?php if($User["Sex"] == 0): ?>selected<?php endif; ?>
                                    >女</option>
                                    <option value="1"
                                    <?php if($User["Sex"] == 1): ?>selected<?php endif; ?>
                                    >男</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="hidden" name="type" value="<?php echo ($type); ?>"/>
                            <input type="hidden" name="ID" value="<?php echo ($User["ID"]); ?>"/>
                            <button class="btn btn-success btn-block" type="submit" accesskey="s"><i
                                    class="fa fa-check"></i> 提交
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>
<script>
    $("#file").fileinput({
        language: 'zh',
        showUpload:false,
        uploadUrl: "upload", //上传后台操作的方法
        uploadAsync: false, //设置上传同步异步 此为同步
        maxFileSize: 2024,
        allowedFileExtensions: ['jpg', 'png','jpeg','gif'], //限制上传文件后缀
        layoutTemplates:{
            actionDelete:'',
            actionUpload:''
        },
        msgFilesTooMany:1
    });

    $("#file-0").fileinput({
        'allowedFileExtensions': ['jpg', 'png', 'gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '/Public/upload/', // you must set a valid URL here else you will get an error
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 3,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
    /*
     $(".file").on('fileselect', function(event, n, l) {
     alert('File Selected. Name: ' + l + ', Num: ' + n);
     });
     */
    $("#file-3").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });
    $("#file-4").fileinput({
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $('#file-4').fileinput('refresh', {previewClass: 'bg-info'});
    });
    /*
     $('#file-4').on('fileselectnone', function() {
     alert('Huh! You selected no files.');
     });
     $('#file-4').on('filebrowse', function() {
     alert('File browse clicked for #file-4');
     });
     */
    $(document).ready(function () {
        $("#test-upload").fileinput({
            'showPreview': false,
            'allowedFileExtensions': ['jpg', 'png', 'gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
         $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
         alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
         });
         */
    });
    $("#input-24").fileinput({
        initialPreview: [
            "<img src='/images/moon.jpg' class='file-preview-image' alt='The Moon' title='The Moon'>",
            "<img src='/images/earth.jpg' class='file-preview-image' alt='The Earth' title='The Earth'>",
        ],
        overwriteInitial: false,
        maxFileSize: 100,
        initialCaption: "The Moon and the Earth"
    });
</script>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-yellow"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="/Public/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/Public/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/Public/AdminLTE/bower_components/raphael/raphael.min.js"></script>
<script src="/Public/AdminLTE/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/Public/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/Public/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/Public/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/Public/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/Public/AdminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="/Public/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/Public/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/Public/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/Public/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/Public/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/Public/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/Public/AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/Public/AdminLTE/dist/js/demo.js"></script>
</body>
</html>