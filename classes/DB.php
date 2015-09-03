<?php

class DB
{
    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'test_news');
    }
}