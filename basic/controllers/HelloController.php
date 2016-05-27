<?php
namespace app\controllers;
use yii\web\Controller;
class HelloController extends Controller
{
	public $layout = 'header';
	public function behaviors()
	{
	    return [
	        [
	            'class' => 'yii\filters\HttpCache',
	            'only' => ['view'],
	            'etagSeed' => function ($action, $params) {
	                return "etagseed1";
	            },
	        ],
	    ];
	}

	public function actionIndex()
	{
		echo "helloooooooooo";
		return $this->render('index');
	}
}
?>
