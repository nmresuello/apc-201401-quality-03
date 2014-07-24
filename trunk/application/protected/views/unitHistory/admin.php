<?php
$this->breadcrumbs=array(
	'Unit Histories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List of Unit Histories', 'url'=>array('index')),
	array('label'=>'Create UnitHistory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('unit-history-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Unit Histories</h1>

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
	'id'=>'unit-history-grid',
	'cssFile' => Yii::app()->baseUrl . '/css/grdview.css',
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
            'name'=>'unit_id',
            'value'=>'$data->unit->unit',
            'filter'=>Unit::model()->unit,
        ),
		'date',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}&nbsp;{update}',
		),
	),
	'cssFile' => Yii::app()->baseUrl . '/css/grdview.css',
)); ?>
