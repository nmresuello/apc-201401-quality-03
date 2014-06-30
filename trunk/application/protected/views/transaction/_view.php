<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>  */ ?>
	<?php echo CHtml::link(CHtml::encode($data->number), array('view', 'id'=>$data->id)); ?>
	<?php //echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee->Names); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('particular_id')); ?>:</b>
	<?php echo CHtml::encode($data->particular->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period_from')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->period_from, 'long', false)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period_to')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->period_to, 'long', false)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('department_id')); ?>:</b>
	<?php echo CHtml::encode($data->department->description); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date_modified, 'long', false)); ?>
	<br />
	
	<?php /*
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_received')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date_received, 'long', false)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_submitted')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date_submitted, 'long', false)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_id')); ?>:</b>
	<?php echo CHtml::encode($data->payroll_id); ?>
	<br />

	*/ ?>

</div>