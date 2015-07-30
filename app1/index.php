<?php


$pdo = new \PDO('mysql:dbname=app1;host=mysql;port:3307', 'root', 'root');

$result = $pdo->query('SELECT 1;');