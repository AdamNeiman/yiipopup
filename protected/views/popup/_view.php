<?php
/* @var $this PopupController */
/* @var $data TblPopup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('use_count')); ?>:</b>
	<?php echo CHtml::encode($data->use_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isOn')); ?>:</b>
	<?php echo CHtml::encode($data->isOn); ?>
	<br />

	<h5>For use this popup just add this code on your web page:</h5>
	<div> <?php echo htmlspecialchars('<script src="'.
					(empty($_SERVER['HTTPS']) ? 'http' : 'https').'://'.
						$_SERVER['SERVER_NAME'].Yii::app()->createUrl('script').'?id='.$data->id.'"></script>'); 
		  ?>
	</div>
	<div>
		<a target="_blank" href="
			<?= Yii::app()->createUrl('script/test').'?id='.$data->id; ?>
		">Тестовая страница</a>
	</div>
	<!-- переделать Yii::app()->createUrl('script', ['id'=>$data->id] -->
</div>