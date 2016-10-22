<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/chison/core/Load.php';
//将Load类注册到自动载入中
spl_autoload_register("\\chison\\core\\Load::autoload");

/*
 * 测试内容
 * chison\test\Test::test();
 * $ths = new chison\test\Test1();
 * $ths->say();
 */

/*
 * 测试微擎项目接口，进行代码优化。
 * */
//$arr = array('content'=>'这是测试信息2','mobile'=>'15855970400');
//$wq = new chison\test\Weiqin();
//$wq->sendcodeApi($url='',$arr);
$ths = chison\core\Factory::createDatabase();
$ths->say();
