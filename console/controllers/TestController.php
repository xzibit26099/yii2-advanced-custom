<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo "я тестовый контроллер. Давай потестируем?";
    }
}
