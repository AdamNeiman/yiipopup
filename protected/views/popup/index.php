<?php
/* @var $this PopupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Popups',
);

$this->menu=array(
	array('label'=>'Create TblPopup', 'url'=>array('create')),
	array('label'=>'Manage TblPopup', 'url'=>array('admin')),
);
?>

<h1>Tbl Popups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
