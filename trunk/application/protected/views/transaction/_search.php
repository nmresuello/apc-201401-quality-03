<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_id'); ?>
		<!--<?php echo $form->textField($model,'employee_id'); ?>-->
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(Employee::model()->findAll(), 'id', 'Names'), array('prompt' => 'Select an employee')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'particular_id'); ?>
		<?php echo $form->textField($model,'particular_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_received'); ?>
		<?php echo $form->textField($model,'date_received'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_submitted'); ?>
		<?php echo $form->textField($model,'date_submitted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period_from'); ?>
		<?php echo $form->textField($model,'period_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period_to'); ?>
		<?php echo $form->textField($model,'period_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payroll_id'); ?>
		<?php echo $form->textField($model,'payroll_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->label($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->