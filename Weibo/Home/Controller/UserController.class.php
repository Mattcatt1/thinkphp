<?php
namespace Home\Controller;
use Home\Model\UserModel;
use Think\Controller;
use Think\Model;

class UserController extends Controller {
    public function index(){
        echo 'home-user-index';
    }

    public function test($user,$pass){
        echo 'user:'.$user.'<br>password:'.$pass;
    }

    public function modle(){
        //创建Model基类，传递User表，thinkphp_user
        //$user = new Model('User');//thinkphp前缀放在了common的config上配置

        //$user = M('User');//不需要加载，性能更高

        //$user = new UserModel();
        //var_dump($user->select());

        $user = D('User');
        var_dump($user->select());
    }

}