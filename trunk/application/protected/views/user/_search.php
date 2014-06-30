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
		<!--<?php echo $form->textField($model,'employee_id'); ?> -->
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(Employee::model()->findAll(), 'id', 'Names'), array('prompt' => 'Select an employee')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'role'); ?>
		<!-- <?php echo $form->textField($model,'role',array('size'=>20,'maxlength'=>45)); ?> -->
		<?php echo $form->dropDownList($model,'role', $model->getRole()); ?>
	</div>
	
	<!--<div class="row">
		<?php echo $form->label($model,'time_log'); ?>
		<?php echo $form->textField($model,'time_log'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->