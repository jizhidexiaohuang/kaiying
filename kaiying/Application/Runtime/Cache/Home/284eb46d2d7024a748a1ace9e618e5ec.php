<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title> Basic example </title>
    <link rel="stylesheet" href="/Public/tree/Treant.css">
    <link rel="stylesheet" href="/Public/tree/examples/custom-colored/custom-colored.css">
    <title><?php echo ($Title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <script src="/Public/2.2.4/jquery.min.js"></script>
    <script src="/Public/2.2.4/jquery.Roundabout.js"></script>
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/Public/css/animate.min.css" rel="stylesheet"/>
    <link href="/Public/css/aso.css" rel="stylesheet"/>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="/Public/jquery.transition.js"></script>-->
    <script src="https://cdn.bootcss.com/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap-hover-dropdown.js"></script>
    <link href="/Public/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/utf8-php/themes/iframe.css" rel="stylesheet">

    <link rel="stylesheet" href="/Public/tree/Treant.css">
    <link rel="stylesheet" href="/Public/tree/examples/collapsable/collapsable.css">
</head>
<body>
<div class="row chart" id="collapsable-example"></div>
<script src="/Public/tree/vendor/raphael.js"></script>
<script src="/Public/tree/Treant.js"></script>
<script src="/Public/tree/examples/collapsable/collapsable.js"></script>
<script>
    tree = new Treant(chart_config);
</script>
</body>
</html>