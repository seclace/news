<?php

class news extends abstractModel
{
    public $id;
    public $title;
    public $text;

    protected static $table = 'news';
    protected static $class = 'news';
}