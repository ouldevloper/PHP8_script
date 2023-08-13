<?php



$redis = new Redis();

$redis->connect('0.0.0.0', 6379);


$redis->set("name", "abdellah", 3600);


echo $redis->get("name");