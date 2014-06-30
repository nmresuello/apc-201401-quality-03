<?php
$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List of Transactions', 'url'=>array('index')),
	array('label'=>'Create Transaction', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('transaction-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Transactions</h1>

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
	'id'=>'transaction-grid',
	'cssFile' => Yii::app()->baseUrl . '/css/grdview.css',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'number',
		array(
            'name'=>'employee_id',
            'value'=>'$data->employee->Names',
            'filter'=>Employee::model()->employees,
        ),
		array(
            'name'=>'particular_id',
            'value'=>'$data->particular->description',
           	'filter'=>Particular::model()->speclaim,
        ),
        array(
            'name'=>'status',
            'value'=>'$data->status',
           	'filter'=>Transaction::model()->stat,
        ),
		//'status',
		array(
            'name'=>'department_id',
            'value'=>'$data->department->description',
           	'filter'=>Department::model()->dept,
        ),
        'date_modified',
		/**
		'date_received',
		'date_submitted',
		'period_from',
		'period_to',
		'amount',
		'payroll_id',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}&nbsp;{update}',
		),
	),
	'cssFile' => Yii::app()->baseUrl . '/css/grdview.css',
)); ?>
