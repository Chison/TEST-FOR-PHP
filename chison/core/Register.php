<?php
/**
 * Created by PhpStorm.
 * User: Chison
 * Date: 2016-10-22
 * Time: 10:14
 * 注册树模式
 * 原理是：将常用的对象存放的到数组中，这样下次调用，就不用再来创建，直接在数组中取出即可。
 */

namespace chison\core;

/**
 * Class Register
 * @package chison\core
 */
class Register
{
    /**
     * @var
     */
    protected static $RegTree;

    /**
     * @param $alias
     * @param $object
     */
    public static function set($alias, $object)
    {
        if(!isset(self::$RegTree[$alias])){
            self::$RegTree[$alias] = $object;
        }
        return self::$RegTree[$alias];
    }

    /**
     * @param $name
     */
    public static function _unset($name)
    {
        unset(self::$RegTree[$name]);
    }

    /**
     * @param $name
     * @return mixed
     */
    public static function get($name)
    {
        return self::$RegTree[$name];
    }

    public static function has($name){
        if(isset(self::$RegTree[$name])){
            return true;
        }
        return false;
    }
}