<?php

namespace App;


abstract class Model
{
    const DB_TABLE_NAME = '';

    public static function GetAllItems()
    {
        $db=Db::instance();
        return $db->query('SELECT * FROM ' . static::DB_TABLE_NAME, static::class);
    }
}