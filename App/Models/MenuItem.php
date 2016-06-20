<?php

namespace App\Models;


use App\Db;
use App\Model;

class MenuItem extends Model
{
    const DB_TABLE_NAME = 'menu';

    public $id;
    public $title;
    public $pos;
    public $href;
    public $parent;


}