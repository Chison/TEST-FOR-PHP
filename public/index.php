<?php
require '../chison/start.php';
use chison\app\RedisTest;

$redis = new RedisTest(BASE . 'config/redis.php');
echo $redis->get('rr');
var_dump($redis->set('test','12'));