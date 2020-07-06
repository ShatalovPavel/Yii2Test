<?php


namespace app\controllers;


use app\components\services\ApiServicesInterface;

class HomeController extends AppController
{


    public function actionIndex()
    {
        return $this->render('index');
    }
}