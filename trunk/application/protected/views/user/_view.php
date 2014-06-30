<div class="view">

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b> -->
	<?php echo CHtml::link(CHtml::encode($data->employee->Names), array('view', 'id'=>$data->id)); ?>
	<?php //echo CHtml::encode($data->employee->Names); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('time_log')); ?>:</b>
	<?php echo CHtml::encode($data->time_log); ?>
	<br />
	-->


</div>