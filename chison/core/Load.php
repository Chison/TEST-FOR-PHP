<?php
/*
 * 自动载入类
 * */
namespace chison\core;
class Load
{
    static function autoload($class){
        require str_replace('\\','/',BASE.'\\'.$class.'.php');
    }
}
