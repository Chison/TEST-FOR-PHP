# TEST-FOR-PHP
php设计模式学习记录和应用

临时测试仓库


入口： public/index.php

redis配置：config/redis.php


核心文件：

app/RedisTest.php

redis/HahRedis.php

可根据不同的键名映射到不同的服务器上

$redis = new RedisTest(BASE . 'config/redis.php');

echo $redis->get('rr');

var_dump($redis->set('test','12'));
