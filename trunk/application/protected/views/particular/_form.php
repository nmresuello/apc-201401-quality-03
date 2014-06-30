<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'particular-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type', $model->getClaim()); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group1'); ?>
		<?php echo $form->radioButtonList($model, 'group1', array( 1 => 'Yes', 0 => 'No' ), array( 'separator' => " ", 'labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'group1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree'); ?>
		<?php echo $form->textField($model,'degree',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'degree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngas'); ?>
		<?php echo $form->textField($model,'ngas',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ngas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group2'); ?>
		<?php echo $form->radioButtonList($model, 'group2', array( 1 => 'Yes', 0 => 'No'), array( 'separator' => " ", 'labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'group2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'percentage'); ?>
		<?php echo $form->textField($model,'percentage'); ?>
		<?php echo $form->error($model,'percentage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->