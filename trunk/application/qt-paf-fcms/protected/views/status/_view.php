<div class="view">

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	-->
	
	<b><!-- <?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>: --></b>
	<?php echo CHtml::link(CHtml::encode($data->employee->Names), array('view', 'id'=>$data->id)); ?>
	<?php //echo CHtml::encode($data->employee->Names); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->active_inactive); ?>
	<br />
	
	<?php /**
	<b><?php echo CHtml::encode($data->getAttributeLabel('time_log')); ?>:</b>
	<?php echo CHtml::encode($data->time_log); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('inactive_date')); ?>:</b>
	<?php echo CHtml::encode($data->inactive_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inactive_reason')); ?>:</b>
	<?php echo CHtml::encode($data->inactive_reason); */?>
	<br />


</div>