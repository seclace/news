<?php

require_once __DIR__ . '/../classes/DB.php';

class news
{
    public $id;
    public $title;
    public $text;

    public static function getAll()
    {
        $db = new DB();
        return $db->query('select * from news', 'news');
    }
}