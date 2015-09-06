<?php

class newsController
{
    public function actionAll()
    {
        $items = news::getAll();
        include __DIR__ . '/../views/news/all.php';
    }

    public function actionOne()
    {
        //echo 'actionOne';die;
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/news/one.php';
    }
}