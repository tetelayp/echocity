<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
//$res= $db->execute('CREATE TABLE IF NOT EXISTS menu (id SERIAL, title VARCHAR (64), pos INT, parent INT);');
//$res= $db->execute('CREATE TABLE IF NOT EXISTS albums (id SERIAL, title VARCHAR (64), category INT, cover VARCHAR (32), href VARCHAR (255));');
//$res= $db->execute("INSERT INTO menu (title, pos, parent) VALUES ('Галерея', 3, -1);");
$data=$db->query('select * from menu order by pos');
var_dump($data);
?>
