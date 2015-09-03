<?php

require_once __DIR__ . '/models/news.php';

$items = news::getAll();
foreach ($items as $item):

    endforeach;
include __DIR__ . '/views/index.php';