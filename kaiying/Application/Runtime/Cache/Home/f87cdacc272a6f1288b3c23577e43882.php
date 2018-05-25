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
                        <!--<li style="font-size: 13px;"><a href="#">视频中心</a></li>-->
                    </ul>
                </li>
                <li class="dropdown" style="margin-right: 20px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">
                        产品服务 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" style="min-width: 100%;">
                        <li class="hidden-xs hidden-sm" style="font-size: 13px;"><a href="<?php echo U('Index/businessone');?>">业务领域</a></li>
                        <li style="font-size: 13px;"><a href="#">服务对象</a></li>
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
                                 <a href="" style="color:#767E95;font-size: 12px;font-weight:bold;">服务对象</a>
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
                            <a href="<?php echo U('Index/businesssix');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">城市更新代建服务</button></a>
                            <a href="<?php echo U('Index/businessfiv');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">资本代建</button></a>
                            <a href="<?php echo U('/');?>"><button class="btn btn-default" style="color:#999999;font-size: 12px;font-weight:bold;">开发投融资</button></a>
                            <a href="<?php echo U('Index/businessfou');?>"><button class="btn btn-info" style="color:white;font-size: 12px;font-weight:bold;">咨询顾问</button></a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-11  hidden-xs text-left"><h2 style="color:#767E95;">咨询顾问</h2></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-11">
                            <p style="color:#999999;font-size: 14px;">大海凯盈凭借团队成员全方位的多年操盘经验，为资本方提供土地项目可行性分析、定位方案、成本利润测算等全方位服务；</p>
                            <p style="color:#999999;font-size: 14px;">为土地开发方提供投资分析、定位方案、规划设计、全过程预算管理、成本管理、项目管理、财税筹划等房地产开发咨询服务。</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-xs-12" style="height:100px;">
                            <div class="col-xs-3 text-right animated fadeInLeft2">
                                <img src="/Public/Img/images4/1.png" class="" style="height:100px;"/>
                            </div>
                            <div class="col-xs-1 text-center animated fadeInRight1">
                                <img src="/Public/Img/images4/2.png" class="" style="height:100px;"/>
                            </div>
                            <div class="col-xs-4 text-center animated fadeInDown">
                                <img src="/Public/Img/images4/3.png" class="" style="height:100px;"/>
                            </div>
                            <div class="col-xs-1 text-center animated fadeInLeft1">
                                <img src="/Public/Img/images4/4.png" class="" style="height:100px;"/>
                            </div>
                            <div class="col-xs-3 text-left animated fadeInRight2">
                                <img src="/Public/Img/images4/5.png" class="" style="height:100px;"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:33px;">
                            <div class="col-xs-3 text-right animated fadeInDown3">
                                <img src="/Public/Img/images4/6.png" class="" style="height:33px;"/>
                            </div>
                            <div class="col-xs-6" style="">
                            </div>
                            <div class="col-xs-3 text-left animated fadeInDown3">
                                <img src="/Public/Img/images4/6.png" class="" style="height:33px;"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:33px;">
                            <div class="col-xs-3 text-right animated fadeInLeft4">
                                <img src="/Public/Img/images4/8.png" class="" style="height:33px;"/>
                            </div>
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-3 text-left animated fadeInRight4">
                                <img src="/Public/Img/images4/9.png" class="" style="height:33px;"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:33px;">
                            <div class="col-xs-3 text-right animated fadeInLeft5" style="padding-top: 5px;">
                                <img src="/Public/Img/images4/10.png" class="" style="height:33px;"/>
                            </div>
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-3 text-left animated fadeInRight5" style="padding-top: 5px;">
                                <img src="/Public/Img/images4/11.png" class="" style="height:33px;"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:33px;margin-top: 5px;">
                            <div class="col-xs-3 text-right animated fadeInLeft6" style="padding-top: 5px;">
                                <img src="/Public/Img/images4/12.png" class="" style="height:33px;"/>
                            </div>
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-3 text-left animated fadeInRight6" style="padding-top: 5px;">
                                <img src="/Public/Img/images4/13.png" class="" style="height:33px;"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:33px;margin-top: 5px;">
                            <div class="col-xs-3">
                            </div>
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-3 text-left animated fadeInRight7" style="padding-top: 5px;">
                                <img src="/Public/Img/images4/14.png" class="" style="height:33px;"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:33px;margin-top: 5px;">
                            <div class="col-xs-3">
                            </div>
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-3 text-left animated fadeInRight8" style="padding-top: 5px;">
                                <img src="/Public/Img/images4/15.png" class="" style="height:33px;"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:33px;margin-top: 5px;">
                            <div class="col-xs-3">
                            </div>
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-3 text-left animated fadeInRight9" style="padding-top: 5px;">
                                <img src="/Public/Img/images4/16.png" class="" style="height:33px;"/>
                            </div>
                        </div>
                        <div class="col-xs-12" style="height:33px;margin-top: 5px;">
                            <div class="col-xs-3">
                            </div>
                            <div class="col-xs-6">
                            </div>
                            <div class="col-xs-3 text-left animated fadeInRight10" style="padding-top: 5px;">
                                <img src="/Public/Img/images4/17.png" class="" style="height:33px;"/>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="border-top:2px #f4f4f4 solid;margin-top:20px;">

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