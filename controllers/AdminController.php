<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends Controller{
    /**
     * {@inheritdoc}
     */


    public function action(){
        if (Yii::$app->user->isGuest) {
            return $this->redirect("/index.php?r=site%2Flogin");
        }
        return $this->render('index');
    }
    public function actionIndex(){
        if (Yii::$app->user->isGuest) {
            return $this->redirect("/index.php?r=site%2Flogin");
        }
        return $this->render('index');
    }

}
