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
		<?php echo $form->label($model,'serialnum'); ?>
		<?php echo $form->textField($model,'serialnum',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>20,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>20,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mname'); ?>
		<?php echo $form->textField($model,'mname',array('size'=>20,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile_num'); ?>
		<?php echo $form->textField($model,'mobile_num',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->dropDownList($model,'gender', $model->getGender()); ?>
	</div>
	
<!--
	<div class="row">
		<?php echo $form->label($model,'birthdate'); ?>
		<?php echo $form->textField($model,'birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street'); ?>
		<?php echo $form->textField($model,'street',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tin_num'); ?>
		<?php echo $form->textField($model,'tin_num',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_num'); ?>
		<?php echo $form->textField($model,'philhealth_num',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atm_num'); ?>
		<?php echo $form->textField($model,'atm_num',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_num'); ?>
		<?php echo $form->textField($model,'pagibig_num',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deduction'); ?>
		<?php echo $form->textField($model,'deduction',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pct_tax'); ?>
		<?php echo $form->textField($model,'pct_tax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bir_exempt'); ?>
		<?php echo $form->textField($model,'bir_exempt',array('size'=>4,'maxlength'=>4)); ?>
	</div>
<!--	
	<div class="row">
		<?php echo $form->label($model,'time_log'); ?>
		<?php echo $form->textField($model,'time_log'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->