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
    public function set($alias, $object)
    {
        self::$RegTree[$alias] = $object;
    }

    /**
     * @param $name
     */
    public function _unset($name)
    {
        unset(self::$RegTree[$name]);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        return self::$RegTree[$name];
    }
}