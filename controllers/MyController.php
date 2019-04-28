<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.04.2019
 * Time: 0:50
 */

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller {
	public function actionIndex()
	{
		return $this->render('index');
	}
}