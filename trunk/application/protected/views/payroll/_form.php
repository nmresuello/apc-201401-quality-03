<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payroll-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'month'); ?>
		<!--<?php echo $form->textField($model,'month',array('size'=>3,'maxlength'=>3)); ?>-->
		<?php echo $form->dropDownList($model,'month', $model->getMonth()); ?>
		<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_year'); ?>
		<!--<?php echo $form->textField($model,'pay_year',array('size'=>4,'maxlength'=>4)); ?>-->
		<?php echo $form->dropDownList($model, 'pay_year', $model->getYear()); ?>
		<?php echo $form->error($model,'pay_year'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->