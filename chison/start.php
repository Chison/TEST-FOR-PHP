<?php
/**
 * Created by PhpStorm.
 * User: Chison
 * Date: 2017/2/13
 * Time: 13:43
 */

define('BASE',realpath(__DIR__.'/../') . DIRECTORY_SEPARATOR);
define('COMPOSER',BASE . 'vendor' . DIRECTORY_SEPARATOR);
define('CHISON',BASE . 'chison' . DIRECTORY_SEPARATOR);
define('CORE',CHISON . 'core' . DIRECTORY_SEPARATOR);


require CORE.'Load.php';
//将Load类注册到自动载入中
spl_autoload_register("\\chison\\core\\Load::autoload");

//composer 自动载入
require COMPOSER . 'autoload.php';
