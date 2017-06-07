<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model {
//UserModel命名要规范，thinkphp_user

    //protected $tablePrefix = 'tp_';//定义数据库表明前缀

    //protected $tableName = 'abc';

    public function _construct(){
        parent::_construct();
        echo '\Home';
    }

}