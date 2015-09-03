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
        $sql = 'select * from news';
        return $db->query($sql);
    }
}