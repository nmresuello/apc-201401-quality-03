<?php
$this->breadcrumbs=array(
	'Rank Histories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List of Rank Histories', 'url'=>array('index')),
	array('label'=>'Create Rank History', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rank-history-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rank Histories</h1>

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
	'id'=>'rank-history-grid',
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
            'name'=>'rank_id',
            'value'=>'$data->rank->description',
           	'filter'=>Rank::model()->rank,
        ),
		'date',
        array(
			'class'=>'CButtonColumn',
			'template'=>'{view}&nbsp;{update}',
			
		),
	),
)); ?>
