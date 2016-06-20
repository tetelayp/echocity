<?php

namespace App\Models;


use App\Db;

class MenuItem
{
    public $id;
    public $title;
    public $pos;
    public $href;
    public $parent;

    public static function GetAllItems()
    {
        $db=new Db();
        return $db->query('SELECT * FROM menu', \App\Models\MenuItem::class);
    }
}