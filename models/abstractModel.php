<?php

class abstractModel
{
    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB();
        return $db->queryAll('select * from ' . static::$table, static::$class);
    }

    public static function getOne($id)
    {
        $db = new DB();
        return $db->queryOne('select * from ' . static::$class . ' where id = ' . $id, static::$class);
    }
}