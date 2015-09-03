<?php

require_once __DIR__ . '/models/news.php';

$items = news::getAll();

var_dump($items);