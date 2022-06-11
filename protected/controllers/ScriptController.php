<?php

class ScriptController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array();
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex($id = '')
	{
		$model=new TblPopup;
		
		$data = $model->find(['condition' => "id=$id"]);
		
		if (is_null($data)) {
			echo "/* nothing data found */";
			return;
		}
		
		if ($data->isOn != 1) {
			echo "/* popup window is off */";
			return;
		}
		
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		$interval = 2000;
		
		if ( empty($data->use_count) ) {
			$data->use_count=1;
		} else {
			$data->use_count++;
		}
		$data->save();
		
		$this->renderFile($this->getViewPath().'/script.php', 
			['id'=>$id,
			 'interval'=> $interval,
			 'content' => $data->content,
			]
		);
		//echo "Hello world";
		//return "Hello world";
	}
	
	public function actionTest($id = '') {
		$model=new TblPopup;
		$data = $model->find(['condition' => "id=$id"]);
		
		if ( is_null($data) ) {
			echo "Not Found";
			return;
		}
		
		$this->renderFile($this->getViewPath().'/script_test.php', 
			['id'=>$id,
			 'name'=> $data->name,
			 'content' => $data->content,
			 'isOn' => $data->isOn
			]
		);
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

}