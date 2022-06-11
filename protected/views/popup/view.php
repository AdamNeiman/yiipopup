<?php
/* @var $this PopupController */
/* @var $model TblPopup */

$this->breadcrumbs=array(
	'Tbl Popups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblPopup', 'url'=>array('index')),
	array('label'=>'Create TblPopup', 'url'=>array('create')),
	array('label'=>'Update TblPopup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblPopup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblPopup', 'url'=>array('admin')),
);
?>

<h1>View TblPopup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'content',
		'use_count',
		'isOn',
	),
)); ?>
