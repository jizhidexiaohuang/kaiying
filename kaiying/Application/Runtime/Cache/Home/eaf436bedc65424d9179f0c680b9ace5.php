<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title><?php echo ($Title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <script src="/Public/2.2.4/jquery.min.js"></script>
    <script src="/Public/2.2.4/jquery.Roundabout.js"></script>
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/Public/dhky.css" rel="stylesheet"/>
    <link href="/Public/css/animate.min.css" rel="stylesheet"/>
    <link href="/Public/css/aso.css" rel="stylesheet"/>
    <!--<link href="/Public/css/base.css" rel="stylesheet"/>-->
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap-hover-dropdown.js"></script>
    <script src="/Public/amazeui/amazeui.js"></script>
    <link href="/Public/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/utf8-php/themes/iframe.css" rel="stylesheet">
    <script src="/Public/2.2.4/jquery.lazyload.js.js"></script>
    <style>
        .fix-modal-open {
            overflow: initial;
        }
        .lineAll{
            line-height: 44px;
            font-size: 1px;
            color:#7D869F;
        }
        a:hover,a:focus {
            text-decoration: none;
        }
        .btn:focus,
        .btn:active:focus{
            outline: none;
        }
        .nav li a{
            color:#777;
        }
        .row{margin:0;}
        .col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{padding:0;}
        .logo { float: left; width:250px; overflow: hidden; height: 75px; line-height: 3rem;}
        .menudong { float: right; width:37px; overflow: hidden; height: 52px; line-height: 3rem;}
    </style>
</head>
<body class="fix-modal-open" style="background-color: white;">
<div class="container-fluid hidden-xs hidden-sm"  style="border-bottom: 4px solid silver; background-color: white;!important;">
    <div class="row " style="max-height: 50px;">
        <!--pc端-->
        <div class="col-lg-12" >
            <div class="col-lg-4 col-md-4 text-right animated fadeInleft">
                <a href="<?php echo U('Index/index');?>"><img src ="/Public/Img/dhkylogo.jpg" style="max-height: 50px;"></a>
            </div>
            <div class="col-lg-4 col-md-4">
            </div>
            <div class="col-lg-4 col-md-4 hidden-xs" style=" margin:10px;width: 160px;">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="请输入关键词"><span class="input-group-addon btn btn-primary">搜索</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid hidden-lg hidden-md"  style="border-bottom: 3px solid #f29500;background-color: white;">
<!--移动端-->
<div class="col-xs-12 " style="background-color: white;" >
    <div class="row">
    <div class="col-xs-12">
        <a href="<?php echo U('Index/index');?>" class="logo animated fadeInLeft"><img src ="/Public/Img/1.png" ></a>
        <a href="javascript:void(0);" class="showMenu menudong animated fadeInright" style="margin:10px 0 10px 10px;"><img src="/Public/Img/menu.png"></a>
    </div>
    </div>
</div>
</div>
<nav class="navbar navbar-default hidden-xs hidden-sm menuLi navbar-collapse" role="navigation" style="border-bottom:1px solid white;margin: -2px 0 -1px 0;background-color:white;font-size:13px;font-weight: bold;">
    <div class="container-fluid">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
            <ul class="nav navbar-nav navbar-left" style="font-family:'微软雅黑';">
                <li style="margin-right: 20px;"><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li class="dropdown" style="margin-right: 20px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">
                        大海凯盈
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" style="min-width: 100%;">
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/aboutCompany');?>">公司概况</a></li>
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/ceoLan');?>">董事长致辞</a></li>
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/structure');?>">组织架构</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="margin-right: 20px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">
                        新闻中心 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" style="min-width: 100%;">
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/news');?>">公司新闻</a></li>
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/MediaReport');?>">媒体报道</a></li>
                        <li style="font-size: 13px;"><a href="#">视频中心</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="margin-right: 20px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">
                        产品服务 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" style="min-width: 100%;">
                        <li class="hidden-xs hidden-sm" style="font-size: 13px;"><a href="<?php echo U('Index/businessone');?>">业务领域</a></li>
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/serverobj');?>">服务对象</a></li>
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/CoreAdvantage');?>">核心优势</a></li>
                    </ul>
                </li>
                <li style="margin-right: 20px;"><a href="<?php echo U('Index/management');?>">管理团队</a></li>
                <li class="dropdown" style="margin-right: 20px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">
                        项目展示 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" style="min-width: 100%;">
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/showProject');?>">大海凯盈</a></li>
                        <li style="font-size: 13px;"><a href="#">凯盈集团</a></li>
                        <li style="font-size: 13px;"><a href="#">大海智地</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="margin-right: 20px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">
                        联系我们 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" style="min-width: 100%;">
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/aboutUs');?>">联系我们</a></li>
                        <li style="font-size: 13px;"><a href="<?php echo U('Index/BusinessCooperation');?>">商务合作</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="margin-right: 20px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">
                        关联公司 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" style="min-width: 100%;">
                        <li style="font-size: 13px;"><a href="http://www.kyzg.com.cn/" target="_blank">凯盈集团</a></li>
                        <li style="font-size: 13px;"><a href="http://www.gdyfq.com.cn/" target="_blank">易房圈</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-lg-3"></div>
    </div>
</nav>
<script type="text/javascript">
   $(".showMenu").click(function(){
       if($(".menuLi").hasClass("hidden-xs")){
           $(".menuLi").removeClass("hidden-xs hidden-sm");
       }else{
           $(".menuLi").addClass("hidden-xs hidden-sm");
       }
   })

    $("li a").hover(function(){
        $(this).css('background-color',"#1E90FF");
        $(this).css('color',"white");
    },function(){
        $(this).css('background-color',"white");
        $(this).css('color',"#777");

    })
</script>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10"
         style="padding: 0;background: url(/Public/Img/bdbg2.png)no-repeat;background-size:100% 100%;">
        <div class="row animated fadeInleft">
            <img class="col-lg-12 hidden-md hidden-xs hidden-sm" src="/Public/Img/detail_top.jpg" height="130px;"
                 width="100%;"/>
            <img class="col-md-12 hidden-lg" src="/Public/Img/default_top_xs.jpg" style="max-height: 200px;"
                 width="100%;"/>
        </div>
        <div class="row" style="font-family: '微软雅黑';">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">

            </div>
            <div class="col-lg-1"></div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-right" style="max-height: 30px;margin-right: 10px;">
                    <span style="max-height:30px;line-height: 30px;"><a href="<?php echo U('Index/index');?>"
                                                                        style="color:#767E95;font-size: 12px;font-weight:bold;"><i
                            class="fa fa-fw fa-home" style="line-height: 100%;"></i>首页</a></span>
                    <span style="max-height:30px;line-height: 30px;" class="active"><a
                            href="javascript:void(0);"
                            style="color:#767E95;font-size: 12px;font-weight:bold;"><i
                            class="fa fa-angle-right"></i>&nbsp;产品服务</a></span>
                    <span style="max-height:30px;line-height: 30px;" class="active"><a
                            href="<?php echo U('Index/businessone');?>"
                            style="color:#162A9C;font-size: 12px;font-weight:bold;"><i
                            class="fa fa-angle-right"></i>&nbsp;业务领域</a></span>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-lg-2"></div>
                <div class="col-lg-8" style="background-color: white;padding: 40px;">
                    <div class="row text-left">
                        <div class="col-lg-8">
                            <span style="padding:5px;border-bottom: 2px solid #162A9C">
                                 <a href="<?php echo U('Index/businessone');?>" style="color:#162A9C;font-size: 12px;font-weight:bold;">业务领域</a>
                            </span>
                            <span style="padding:5px;">
                                 <a href="<?php echo U('Index/serverobj');?>" style="color:#767E95;font-size: 12px;font-weight:bold;">服务对象</a>
                            </span>
                            <span style="padding:5px;">
                                <a href="<?php echo U('Index/CoreAdvantage');?>" style="color:#767E95;font-size: 12px;font-weight:bold;">核心优势</a>
                            </span>
                        </div>
                        <div class="col-lg-4 text-right">
                            <img src="/Public/Img/detail_font.png"/>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-lg-12 col-md-12 text-left hidden-xs">
                            <img src="/Public/Img/businessA.png"/>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-lg-12 col-xs-12 text-right" style="margin-top: 20px;">
                            <a href="<?php echo U('Index/businessone');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">政府代建</button></a>
                            <a href="<?php echo U('Index/businessthr');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">小股操盘</button></a>
                            <a href="<?php echo U('Index/businesstwo');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">委托开发管理</button></a>
                            <a href="<?php echo U('Index/businesssix');?>"><button class="btn btn-info" style="color:white;font-size: 12px;font-weight:bold;">城市更新代建服务</button></a>
                            <a href="<?php echo U('Index/businessfiv');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">资本代建</button></a>
                            <a href="<?php echo U('Index/businesssev');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">开发投融资</button></a>
                            <a href="<?php echo U('Index/businessfou');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">咨询顾问</button></a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-lg-12  hidden-xs text-left"><h2 style="color:#767E95;">城市更新代建服务</h2></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p style="color:#999999;font-size: 14px;line-height: 14px;">大海凯盈在城市更新领域依托专业的政策解读能力和成熟的房地产开发经验。</p>
                            <p style="color:#999999;font-size: 14px;line-height: 14px;">为村股份公司等土地所有方提供从计划申报、专规编制、实施主体确认、土地手续办理、金融资源引入，项目开发建设等全流程服务，为土地方实现收益最大化。</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-xs-12" style="padding-top:0px;height:50px;">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-4 text-center animated fadeInDown">
                                <img src="/Public/Img/images6/1.png"/>
                            </div>
                            <div class="col-xs-3">
                            </div>
                            <div class="col-xs-3 text-center animated fadeInDown">
                                <img src="/Public/Img/images6/2.png"/>
                            </div>
                            <div class="col-xs-1 animated text-left fadeInDown">
                            </div>
                        </div>
                        <div class="col-xs-12" style="margin-top:10px;height:100px;">
                            <div class="col-xs-6 animated fadeInLeft1">
                                <img src="/Public/Img/images6/3.png"/>
                                <img src="/Public/Img/images6/4.png"/>
                                <img src="/Public/Img/images6/5.png"/>
                                <img src="/Public/Img/images6/6.png"/>
                                <img src="/Public/Img/images6/8.png"/>
                            </div>
                            <div class="col-xs-2 text-center animated fadeInDown2">
                                <img src="/Public/Img/images6/13.png"/>
                            </div>
                            <div class="col-xs-4 animated fadeInRight3">
                                <img src="/Public/Img/images6/14.png"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:50px;">
                            <div class="col-xs-6 text-center animated fadeInDown4">
                                <img src="/Public/Img/images6/15.png" class=""/>
                            </div>
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-4 animated fadeInDown4 text-center">
                                <img src="/Public/Img/images6/16.png" class=""/>
                            </div>
                            <div class="col-xs-1">
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:50px;">
                            <div class="col-xs-6 text-center animated fadeInLeft5">
                                <img src="/Public/Img/images6/17.png" class=""/>
                            </div>
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-4 animated fadeInRight6 text-center">
                                <img src="/Public/Img/images6/18.png" class=""/>
                            </div>
                            <div class="col-xs-1">
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:50px;">
                            <div class="col-xs-6 text-center animated fadeInUp7">
                                <img src="/Public/Img/images6/19.png" class=""/>
                            </div>
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-4 animated fadeInUp8 text-center">
                                <img src="/Public/Img/images6/20.png" class=""/>
                            </div>
                            <div class="col-xs-1">
                            </div>
                        </div>
                        <div class="col-xs-12" style="margin-top:10px;height:100px;">
                            <div class="col-xs-6 animated fadeInLeft9">
                                <img src="/Public/Img/images6/21.png"/>
                                <img src="/Public/Img/images6/22.png"/>
                                <img src="/Public/Img/images6/23.png"/>
                                <img src="/Public/Img/images6/24.png"/>
                                <img src="/Public/Img/images6/25.png"/>
                            </div>
                            <div class="col-xs-2 text-center animated fadeInUp10">
                                <img src="/Public/Img/images6/26.png"/>
                            </div>
                            <div class="col-xs-4 animated fadeInRight11">
                                <img src="/Public/Img/images6/27.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="border-top:2px #f4f4f4 solid;margin-top:10px;">

                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row" style="font-size: 13px;">
    <div class="col-lg-2 hidden-md hidden-xs"></div>
    <div class="col-lg-8 col-md-12 hidden-xs hidden-sm " style="height:64px;line-height: 64px;">
        <div class="col-lg-9 col-md-8 col-xs-12 text-left"><p>
            <span style="font-size: 14px;color:#295cc2;font-weight: bold;"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;0769-21681218</span>
            <span class="hidden-xs hidden-sm" style="color:#3f4a6b;font-size: 12px;">&nbsp;&nbsp;广东大海凯盈房产建设管理有限公司&nbsp;&nbsp;&nbsp;版权所有&nbsp;|&nbsp;<a href="#" style="color:#3f4a6b;">法律声明</a>&nbsp;|</span>
        </p></div>
        <div class="col-lg-3 col-md-4 col-xs-12 text-right">
            <p style="line-height: 64px;">
                关注大海凯盈
                <a target="_blank"  href=""><img src="/Public/Img/wb.png"/></a>
                <a target="_blank"  href=""><img src="/Public/Img/wx.png"/></a>
            </p>
        </div>
    </div>
    <div class="hidden-lg hidden-md col-sm-12 col-xs-12 " style="height:64px;line-height: 64px;">
        <div class="col-xs-12 text-center"><p>
            <span style="font-size: 14px;color:#295cc2;font-weight: bold;"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;0769-21681218</span>
            <span class="hidden-xs hidden-sm" style="color:#3f4a6b;font-size: 12px;">&nbsp;&nbsp;广东大海凯盈房产建设管理有限公司&nbsp;&nbsp;&nbsp;版权所有<a href="#" style="color:#3f4a6b;">&nbsp;|&nbsp;隐私政策&nbsp;|&nbsp;</a><a href="#" style="color:#3f4a6b;">法律声明</a></span>
        </p></div>
        <div class="col-xs-12 text-center">
            <p style="line-height: 64px;">
                关注大海凯盈
                <a target="_blank"  href=""><img src="/Public/Img/wb.png"/></a>
                <a target="_blank"  href=""><img src="/Public/Img/wx.png"/></a>
            </p>
        </div>
    </div>
    <div class="col-lg-2 hidden-md hidden-xs"></div>
</div>
</div>
<div class="col-lg-1"></div>
</div>
</div>
</body>
</html>