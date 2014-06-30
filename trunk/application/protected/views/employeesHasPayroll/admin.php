<?php
$this->breadcrumbs=array(
	'Employees Payrolls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List of Employees Payroll', 'url'=>array('index')),
	array('label'=>'Create Employees Payroll', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('employees-has-payroll-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employees' payrolls</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employees-has-payroll-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
            'name'=>'employee_id',
            'value'=>'$data->employee->Names',
            'filter'=>Employee::model()->employees,
        ),
		array(
            'name'=>'payroll_id',
            'value'=>'$data->payroll->number',
            'filter'=>Payroll::model()->paynum,
        ),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}&nbsp;{update}',
		),
	),
	'cssFile' => Yii::app()->baseUrl . '/css/grdview.css',
)); ?>
