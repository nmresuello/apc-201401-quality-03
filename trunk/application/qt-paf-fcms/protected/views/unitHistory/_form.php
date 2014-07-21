<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unit-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(Employee::model()->findAll(), 'id', 'Names'), array('prompt' => 'Select an employee')); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'unit_id'); ?>
		<?php echo $form->dropDownList($model, 'unit_id', CHtml::listData(Unit::model()->findAll(), 'id', 'code'), array('prompt' => 'Select a unit')); ?>
		<?php echo $form->error($model,'unit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'name'=>'LeaveSummary[date]', // LeaveSummary (Model) , LS_FROM (Attribute) 
		'model'=>$model,
		'attribute'=>'date',
		// additional javascript options for the date picker plugin
		'options'=>array(
		'showAnim'=>'fold',
		'changeMonth'=>true,
		'changeYear'=>true,
		'yearRange'=>'1800:$arrYears', 
		'mode'=>'datetime',
		'dateFormat'=>'yy-mm-dd',
		'showButtonPanel'=>true,
        'yearRange'=>'1900:2090',
		'debug'=>true,
		),
		'htmlOptions'=>array(
		'style'=>'height:20px;',
		'placeholder'=>'Click to select date'
		),
		));	
		?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->