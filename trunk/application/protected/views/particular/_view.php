<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b> */ ?>
	<h1><?php echo CHtml::link(CHtml::encode($data->code), array('view', 'id'=>$data->id)); ?></h1>
	<?php //echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('group1')); ?>:</b>
	<?php echo CHtml::encode($data->group1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degree')); ?>:</b>
	<?php echo CHtml::encode($data->degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngas')); ?>:</b>
	<?php echo CHtml::encode($data->ngas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group2')); ?>:</b>
	<?php echo CHtml::encode($data->group2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percentage')); ?>:</b>
	<?php echo CHtml::encode($data->percentage); ?>
	<br />

	*/ ?>

</div>