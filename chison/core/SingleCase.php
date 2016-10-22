<?php
/**
 * Created by PhpStorm.
 * User: Chison
 * Date: 2016-10-20
 * Time: 15:06
 * 单例模式
 */

/**
 * 设计模式之单例模式
 * $_instance必须声明为静态的私有变量
 * 构造函数必须声明为私有,防止外部程序new类从而失去单例模式的意义
 * getInstance()方法必须设置为公有的,必须调用此方法以返回实例的一个引用
 * ::操作符只能访问静态变量和静态函数
 * new对象都会消耗内存
 * 使用场景:最常用的地方是数据库连接。
 * 使用单例模式生成一个对象后，该对象可以被其它众多对象所使用。
 */
namespace chison\core;
class SingleCase
{
    //保存实例
    private static $_instance;

    private function __construct()
    {
        echo "外界不能实例化单例类，所以构造方法必须私有化！";
        //调用一些内部方法
    }

    //供外部调用，该单例
    public static function singleCase()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    //阻止用户复制对象实例
    private function __clone()
    {
        trigger_error('Clone is not allow', E_USER_ERROR);
    }
}