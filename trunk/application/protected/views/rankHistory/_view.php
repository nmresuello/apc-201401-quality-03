<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b> */ ?>
	<?php echo CHtml::link(CHtml::encode($data->employee->Names), array('view', 'id'=>$data->id)); ?>
	<?php //echo CHtml::encode($data->employee->Names); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('rank_id')); ?>:</b>
	<?php echo CHtml::encode($data->rank->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date, 'long', false)); ?>
	<br />	


</div>