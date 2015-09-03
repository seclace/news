<?php

class DB
{
    public $id;
    public $title;
    public $text;
    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'test_news');
    }
}