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
		<?php echo $form->textField($model,'number',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'month'); ?>
		<?php echo $form->dropDownList($model,'month', $model->getMonth()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_year'); ?>
		<!--<?php echo $form->textField($model,'pay_year',array('size'=>4,'maxlength'=>4)); ?>-->
		<?php echo $form->dropDownList($model, 'pay_year', $model->getYear()); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->