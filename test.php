<?php
$a=new PDO('mysql:host=127.0.0.1; dbname=test','root','');
$sth=$a->prepare('SELECT Users.name, city.name, jobs.job from Users LEFT JOIN city ON Users.city=city.id LEFT JOIN jobs ON Users.job=jobs.id');
$res=$sth->execute();
$r=$sth->fetchAll();

var_dump($r);