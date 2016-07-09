<?php

require __DIR__ . '/autoload.php';

//$db = new \App\Db();
//$res= $db->execute('CREATE TABLE IF NOT EXISTS menu (id SERIAL, title VARCHAR (64), pos INT, parent INT);');
//$res= $db->execute('ALTER TABLE menu ADD href VARCHAR(255) NOT NULL AFTER parent;');
//$res= $db->execute('CREATE TABLE IF NOT EXISTS albums (id SERIAL, title VARCHAR (64), category INT, cover VARCHAR (32), href VARCHAR (255));');
//$res= $db->execute("INSERT INTO menu (title, pos, parent) VALUES ('Галерея', 3, -1);");

//$data=\App\Models\MenuItem::GetAllItems();
//var_dump($data);

$a = new \App\Models\MenuItem();
$a->title='Home';
$a->pos=1;
$a->parent=-1;
$a->href='#';
var_dump($a->insert());

?>
