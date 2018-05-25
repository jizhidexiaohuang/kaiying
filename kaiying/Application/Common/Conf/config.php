<?php
return array(
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '120.77.46.247', // 服务器地址
    'DB_NAME'   => 'guangbang', // 数据库名
    'DB_USER'   => 'guangbang', // 用户名
    'DB_PWD'    => '18565607025wen', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
//    'DEFAULT_MODULE'     => 'Index', //默认模块
    'URL_MODEL'          => '3', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    'URL_HTML_SUFFIX' => 'html|shtml|xml',
    'DB_PARAMS'    =>    array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL), //区分数据库大小写
    //缓存配置
    'DATA_CACHE_TYPE' => 'Memcached',
    'DATA_CACHE_TIME' => 60,
    'MEMCACHED_SERVER' => array(
        array('127.0.0.1', 11211, 0)
    ),
);