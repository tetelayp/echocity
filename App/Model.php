<?php

namespace App;


abstract class Model
{
    const DB_TABLE_NAME = '';

    public $id;

    public static function GetAllItems()
    {
        $db=Db::instance();
        return $db->query('SELECT * FROM ' . static::DB_TABLE_NAME, static::class);
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()){
            return;
        }
        $columns=[];
        $values=[];
        foreach ($this as $k=>$v){
            if ('id' == $k){
                continue;
            }
            $columns[]=$k;
            $values[':' . $k]=$v;
        }


        $sql='INSERT INTO ' . static::DB_TABLE_NAME . ' (' . implode(',', $columns) . ')
                           VALUES (' . implode(',', array_keys($values)) . ');' ;

        //var_dump($columns);
        //var_dump($values);
        //echo $sql;
        $db = Db::instance();
        return $db->execute($sql, $values);

    }
}