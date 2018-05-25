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
<link rel="stylesheet" href="/Public/page.css">
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            管理员列表
            <small>管理员管理</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li class=""><i class="fa fa-users"></i> 用户管理</li>
            <li class="active"><i class="fa fa-user"></i> 管理员列表</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12 margin-bottom">
                <div class="col-lg-6">
                    <a href="<?php echo U('User/add');?>"><input type="button" class="btn btn-info" value="添加用户"></a>
                </div>
                <!--<form action="" method="get">-->
                    <!--<div class="input-group col-lg-6">-->
                    <!--<input type="search" class="form-control" name="UserName" placeholder="请输入要搜索的用户名或手机">-->
                    <!--<span class="input-group-btn"><button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button></span>-->
                    <!--</div>-->
                <!--</form>-->
            </div>
            <?php if(is_array($Ulist)): $i = 0; $__LIST__ = $Ulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-4">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" style="height:100px;" src="<?php echo ($vo["HeadImg"]); ?>" onerror="this.src='/Public/Img/null.jpg'">
                        <h3 class="profile-username text-center">　<?php echo ($vo["NickName"]); ?>　</h3>
                        <p class="text-muted text-center">　<?php echo ($vo["Tel"]); ?>　</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item"><b>用户名</b> <a class="pull-right"><?php echo ($vo["UserName"]); ?></a></li>
                            <li class="list-group-item"><b>真实姓名</b> <a class="pull-right"><?php echo ($vo["TrueName"]); ?></a></li>
                            <li class="list-group-item"><b>部门</b> <a class="pull-right"><?php echo ($vo["Department"]); ?></a></li>
                            <li class="list-group-item"><b>上次登录时间</b><a class="pull-right"><?php echo ($vo["UpdateTime"]); ?></a></li>
                            <li class="list-group-item"><b>上次登录IP</b> <a class="pull-right"><?php echo ($vo["LastIp"]); ?></a></li>
                            <li class="list-group-item"><b>职位</b> <a class="pull-right"><?php echo ($vo["Position"]); ?></a></li>
                        </ul>
                        <a class="btn btn-primary btn-block" href="<?php echo U('User/add',array('ID'=>$vo['ID'],'type'=>1));?>"><i class="fa fa-pencil-square-o"></i> 修改</a>
                        <?php if($vo["status"] == 1): ?><a class="btn btn-danger btn-block" href="<?php echo U('User/change',array('ID'=>$vo['ID'],'status'=>0));?>"><i class="fa fa-lock"></i> 禁用</a>
                            <?php else: ?>
                            <a class="btn btn-success btn-block" href="<?php echo U('User/change',array('ID'=>$vo['ID'],'status'=>1));?>"><i class="fa fa-unlock"></i> 启用</a><?php endif; ?>
                        <a class="btn btn-warning btn-block" href="<?php echo U('User/delUser',array('ID'=>$vo['ID']));?>" onclick="if(confirm('确定删除?')==false)return false;"><i class="fa fa-trash"></i> 删除</a>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="row">
            <div class="col-lg-12 yahoo2">
                <?php echo ($Page); ?>
            </div>
        </div>
    </section>
</div>

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