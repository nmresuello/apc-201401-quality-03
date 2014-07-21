<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php //echo CHtml::encode($data->number); ?>
	<?php echo CHtml::link(CHtml::encode($data->number), array('view', 'id'=>$data->id)); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('month')); ?>:</b>-->
	<?php echo CHtml::encode($data->monthyr); ?>
	<br />

<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_year')); ?>:</b>
	<?php echo CHtml::encode($data->pay_year); ?>
	<br />
-->

</div>