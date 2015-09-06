<?php

class news
{
    public $id;
    public $title;
    public $text;

    public static function getAll()
    {
        $db = new DB();
        return $db->queryAll('select * from news', 'news');
    }

    public static function getOne($id)
    {
        $db = new DB();
        return $db->queryOne('select * from news where id = ' . $id, 'news');
    }
}