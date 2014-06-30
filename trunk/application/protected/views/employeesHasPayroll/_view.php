<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->payroll->number), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee->Names); ?>
	<br />

</div>