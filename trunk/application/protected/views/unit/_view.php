<div class="view">

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	-->

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b> -->
	<h1><?php echo CHtml::link(CHtml::encode($data->code), array('view', 'id'=>$data->id)); ?></h1>
	<?php //echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subunit')); ?>:</b>
	<?php echo CHtml::encode($data->subunit); ?>
	<br />


</div>