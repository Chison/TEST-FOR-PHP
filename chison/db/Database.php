<?php
/**
 * Created by PhpStorm.
 * User: Chison
 * Date: 2016-10-22
 * Time: 10:29
 * 将截然不同的函数封装成统一的API-适配器模式
 */
namespace chison\db;

interface IDatabase
{
    public function connect($host,$user,$passwd);
    public function query($sql);
    public function close();
}


class Database
{

}