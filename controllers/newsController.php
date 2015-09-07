<?php

class newsController
{
    public function actionAll()
    {
        $news = news::getAll();
        $view = new view();
        $view->items = $news;
        $view->display('news/all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new view();
        $view->item = $item;
        $view->display('news/one.php');
    }
}