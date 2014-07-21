<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'status-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(Employee::model()->findAll(), 'id', 'Names'), array('prompt' => 'Select an employee')); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>
<div class="cpanel">
	<div class="row">
		<?php echo $form->labelEx($model,'active_inactive'); ?>
		<?php echo $form->dropDownList($model,'active_inactive', $model->getStatus()); ?>
		<?php echo $form->error($model,'active_inactive'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'inactive_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
'name'=>'LeaveSummary[inactive_date]', // LeaveSummary (Model) , LS_FROM (Attribute) 
'model'=>$model,
'attribute'=>'inactive_date',
// additional javascript options for the date picker plugin
'options'=>array(
'showAnim'=>'fold',
'changeMonth'=>true,
'changeYear'=>true,
'yearRange'=>'1800:$arrYears', 
'mode'=>'date',
'dateFormat'=>'yy-mm-dd',
),
'htmlOptions'=>array(
'style'=>'height:20px;',
'placeholder'=>'Click to select date'
),
));	
?>
		<?php echo $form->error($model,'inactive_date'); ?>
	</div>

	<div class="row" class="cpanelContent">
		<?php echo $form->labelEx($model,'inactive_reason'); ?>
		<?php echo $form->textArea($model,'inactive_reason',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'inactive_reason'); ?>
	</div>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->