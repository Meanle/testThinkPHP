<?php
/*$module = isset($_GET['m'])?$_GET['m']:'Index';
$action = isset($_GET['a'])?$_GET['a']:'Index';
$test = new $module();
$test->$action();
class Index{
    function __construct(){
        echo 'lalal';
    }
    function index(){
        echo "<h1>你是猪</h1>";
    }
}
exit;*/


define('APP_DEBUG',true);
define('APP_NAME','App');
define('APP_PATH','./App/');
require('./ThinkPHP/ThinkPHP.PHP');