<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'employee_id'); ?>
		<!--<?php echo $form->textField($model,'employee_id'); ?>-->
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(Employee::model()->findAll(), 'id', 'Names'), array('prompt' => 'Select an employee')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'active_inactive'); ?>
		<!--<?php echo $form->textField($model,'active_inactive',array('size'=>8,'maxlength'=>8)); ?>-->
		<?php echo $form->dropDownList($model,'active_inactive', $model->getStatus()); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->label($model,'inactive_date'); ?>
		<?php echo $form->textField($model,'inactive_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inactive_reason'); ?>
		<?php echo $form->textField($model,'inactive_reason',array('size'=>60,'maxlength'=>100)); ?>
	</div>
	
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->