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
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>45,'maxlength'=>45)); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->label($model,'group1'); ?>
		<?php echo $form->textField($model,'group1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'degree'); ?>
		<?php echo $form->textField($model,'degree',array('size'=>20,'maxlength'=>20),array('visible'=>$model->group1=='1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngas'); ?>
		<?php echo $form->textField($model,'ngas',array('size'=>20,'maxlength'=>20),array('visible'=>$model->group1=='1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group2'); ?>
		<?php echo $form->textField($model,'group2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'percentage'); ?>
		<?php echo $form->textField($model,'percentage',array('visible'=>$model->group2=='1')); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->