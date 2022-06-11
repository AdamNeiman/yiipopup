<?php
/* @var $this PopupController */
/* @var $model TblPopup */

$this->breadcrumbs=array(
	'Tbl Popups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblPopup', 'url'=>array('index')),
	array('label'=>'Manage TblPopup', 'url'=>array('admin')),
);
?>

<h1>Create TblPopup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>