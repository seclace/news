<?php

class DB
{

    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'test_news');
    }

    public function query($sql, $class = 'stdClass')
    {
        $result = mysqli_query($this->link, $sql);
        if (false === $result) return false;

        $ret = [];

        while ($row = mysql_fetch_object($result, $class)) {
            $ret[] = $row;
        }

        return $ret;
    }

}