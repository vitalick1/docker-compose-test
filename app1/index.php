<?php
$pdo = new \PDO('mysql:dbname=app1;host=mysql;port:3307', 'root', 'root');
$result = $pdo->query('SELECT 1;');

print_r($result);


$redis = new Redis();
$redis->connect('redis', '6379');
$redis->set("test", "aaa");
print_r($redis->get("test"));


$gearman = new \GearmanClient();
$gearman->addServer("gearman");
$gearman->addTask("test", json_encode(['test'=>'test']));


$gearmanWorker = new \GearmanWorker();

$gearmanWorker->addFunction('test', function(\GearmanJob $job){
    print_r($job->workload());
});