<?php
/* @var $this PopupController */
/* @var $model TblPopup */

$this->breadcrumbs=array(
	'Tbl Popups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblPopup', 'url'=>array('index')),
	array('label'=>'Create TblPopup', 'url'=>array('create')),
	array('label'=>'View TblPopup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblPopup', 'url'=>array('admin')),
);
?>

<h1>Update TblPopup <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>