<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'particular-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'serialnum'); ?>
		<?php echo $form->textField($model,'serialnum',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'serialnum'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

		<div class="row">
		<?php echo $form->labelEx($model,'mname'); ?>
		<?php echo $form->textField($model,'mname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_num'); ?>
		<?php echo $form->textField($model,'mobile_num',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'mobile_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model,'gender', $model->getGender()); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'name'=>'LeaveSummary[birthdate]', // LeaveSummary (Model) , LS_FROM (Attribute) 
		'model'=>$model,
		'attribute'=>'birthdate',
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
		<?php echo $form->error($model,'birthdate'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
	
		<div class="row">
		<?php echo $form->labelEx($model,'street'); ?>
		<?php echo $form->textField($model,'street',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'street'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tin_num'); ?>
		<?php echo $form->textField($model,'tin_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tin_num'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_num'); ?>
		<?php echo $form->textField($model,'philhealth_num',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'philhealth_num'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'atm_num'); ?>
		<?php echo $form->textField($model,'atm_num',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'atm_num'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pagibig_num'); ?>
		<?php echo $form->textField($model,'pagibig_num',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pagibig_num'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'deduction'); ?>
		<?php echo $form->textField($model,'deduction',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'deduction'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pct_tax'); ?>
		<?php echo $form->textField($model,'pct_tax',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pct_tax'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bir_exempt'); ?>
		<?php echo $form->textField($model,'bir_exempt',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'bir_exempt'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->