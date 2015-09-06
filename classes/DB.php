<?php

class DB
{

    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'test_news');
    }

    public function queryAll($sql, $class = 'stdClass')
    {
        $result = mysqli_query($this->link, $sql);
        if (false === $result) {
            return false;
        }
        $ret = [];
        while ($row = mysqli_fetch_object($result, $class)) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryOne($sql, $class = 'stdClass')
    {
        return $this->queryAll($sql, $class)[0];
    }

}