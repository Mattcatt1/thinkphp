<?php
return array(
	//'配置项'=>'配置值'
    //禁止模块访问
    'MODULE_DENY_LIST'=>array('Common','Runtime'),

    //mysql 全局变量
    /*'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_USER'=>'root',
    'DB_PWD'=>'',
    'DB_NAME'=>'thinkphp',
    'DB_PORT'=>3306,
    'DB_PREFIX'=>'thinkphp_',*/

    //PDO专用定义
    'DB_TYPE'=>'mysql',
    'DB_USER'=>'root',
    'DB_PWD'=>'',
    'DB_PREFIX'=>'thinkphp_',
    'DB_DSN'=>'mysql:host=localhost;dbname=thinkphp;charset=UTF8',

    //页面调试工具
    //'SHOW_PAGE_TRACE'=>true,

);