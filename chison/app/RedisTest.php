<?php
/**
 * Created by PhpStorm.
 * User: Chison
 * Date: 2017/2/13
 * Time: 15:03
 */

namespace chison\app;


use chison\Redis\HashRedis;

class RedisTest
{
    private $host = '127.0.0.1';
    private $port = 6379;
    private $redisConfig = '/config/redis.php';

    private $_redis;

    //载入配置文件
    public function __construct($name)
    {
        $this->redisConfig = include $name;
        foreach ($this->redisConfig as $k=>$v){
            $this->_redis[$k] = new \Predis\Client($v);
            HashRedis::addNode($v['host']);
        }
    }

    public function set($name,$value){
        return $this->getServerObject($name)->set($name,$value);
    }

    public function get($name){
        return $this->getServerObject($name)->get($name);
    }


    //获取redis对象
    protected function getServerObject($name){
        $tmp = HashRedis::mapServer($name);
        return $this->_redis[HashRedis::toHash($tmp['server'])];
    }
}