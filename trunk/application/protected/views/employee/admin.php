<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List of Employees', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('employee-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employees</h1>

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
	'id'=>'employee-grid',
	'cssFile' => Yii::app()->baseUrl . '/css/grdview.css',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'serialnum',
		'lname',
		'fname',
		'mname',
		/*'mobile_num',
		'gender',
		'birthdate',
		'address',
		'street',
		'city',
		'tin_num',
		'philhealth_num',
		'atm_num',
		'pagibig_num',
		'deduction',
		'pct_tax',
		'bir_exempt',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}&nbsp;{update}',
		),
	),
	'cssFile' => Yii::app()->baseUrl . '/css/grdview.css',
)); ?>
