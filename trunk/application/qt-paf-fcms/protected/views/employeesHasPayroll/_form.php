<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employees-has-payroll-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'payroll_id'); ?>
		<?php echo $form->dropDownList($model, 'payroll_id', CHtml::listData(Payroll::model()->findAll(), 'id', 'number'), array('prompt' => 'Select a payroll')); ?>
		<?php echo $form->error($model,'payroll_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(Employee::model()->findAll(), 'id', 'Names'), array('prompt' => 'Select an employee')); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->