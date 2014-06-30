<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table>
<tr><td>
	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>
</td>
<td>
<div class="row">
		<?php echo $form->labelEx($model,'payroll_id'); ?>
		<?php echo $form->dropDownList($model, 'payroll_id', CHtml::listData(Payroll::model()->findAll(), 'id', 'number'), array('prompt' => 'Select a payroll')); ?>
		<?php echo $form->error($model,'payroll_id'); ?>
	</div>
</td>
<td>
	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(Employee::model()->findAll(), 'id', 'Names'), array('prompt' => 'Select an employee')); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>
</td>
</tr>
<tr>
<td>
	<div class="row">
		<?php echo $form->labelEx($model,'particular_id'); ?>
		<?php echo $form->dropDownList($model, 'particular_id', CHtml::listData(Particular::model()->findAll(), 'id', 'description'), array('prompt' => 'Select a particular')); ?>
		<?php echo $form->error($model,'particular_id'); ?>
	</div>
</td>
<td>
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model, 'status', $model->getStat()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
</td>
</tr>
<tr>
<td>
	<div class="row">
		<?php echo $form->labelEx($model,'period_from'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'name'=>'LeaveSummary[period_from]', // LeaveSummary (Model) , LS_FROM (Attribute) 
		'model'=>$model,
		'attribute'=>'period_from',
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
		<?php echo $form->error($model,'period_from'); ?>
	</div>
</td>
<td>
	<div class="row">
		<?php echo $form->labelEx($model,'period_to'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'name'=>'LeaveSummary[period_to]', // LeaveSummary (Model) , LS_FROM (Attribute) 
		'model'=>$model,
		'attribute'=>'period_to',
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
		<?php echo $form->error($model,'period_to'); ?>
	</div>
</td>
</tr>
<tr>
<td>
	<div class="row">
		<?php echo $form->labelEx($model,'department_id'); ?>
		<?php echo $form->dropDownList($model, 'department_id', CHtml::listData(Department::model()->findAll(), 'id', 'code'), array('prompt' => 'Select a department')); ?>
		<?php echo $form->error($model,'department_id'); ?>
	</div>
</td>
<td>
	<div class="row">
		<?php echo $form->labelEx($model,'date_received'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'name'=>'LeaveSummary[date_received]', // LeaveSummary (Model) , LS_FROM (Attribute) 
		'model'=>$model,
		'attribute'=>'date_received',
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
		<?php echo $form->error($model,'date_received'); ?>
	</div>
</td>
<td>	
	<div class="row">
		<?php echo $form->labelEx($model,'date_submitted'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'name'=>'LeaveSummary[date_submitted]', // LeaveSummary (Model) , LS_FROM (Attribute) 
		'model'=>$model,
		'attribute'=>'date_submitted',
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
		<?php echo $form->error($model,'date_submitted'); ?>
	</div>
</td>
<td>
	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>
</td>
</tr>
</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->