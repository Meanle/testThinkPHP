<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo C('URL_MODEL');
        echo U('Index/user',array('id'=>1),'html',true);
    }
    public function user(){
        echo 'id is:'.$_GET['id'].'<br>';
        echo '这是index模块得user方法';

    }
}