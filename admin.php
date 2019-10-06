<?php
//定义项目程序路径
define('APP_PATH','./App/');
//开启调试模式，上线后，要关闭
define('APP_DEBUG',TRUE);
//想让该入口文件，直接路由到Admin模块里面Index控制器里面的index方法。
$_GET['m']='Admin';//定义默认的模块
$_GET['c']='Index';//定义默认的控制器
$_GET['a']='index';//定义默认的方法。
//引入入口文件
require 'ThinkPHP/ThinkPHP.php';
?>