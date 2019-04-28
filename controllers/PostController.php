<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Editor;

class PostController extends Controller {
	public function actionIndex()
	{
		if(Yii::$app->request->isAjax){
			$dan=Editor::Converter(Yii::$app->request->post());
			return $dan;
		}
		//return $this->render('index');
	}
}