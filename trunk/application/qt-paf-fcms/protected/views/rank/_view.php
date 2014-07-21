<div class="view">

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b> -->
	<h1><?php echo CHtml::link(CHtml::encode($data->code), array('view', 'id'=>$data->id)); ?></h1>
	<?php //echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>