<?php
$this->breadcrumbs=array(
	'Particulars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List of Particulars', 'url'=>array('index')),
	array('label'=>'Create Particular', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('particular-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Particulars</h1>

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
	'id'=>'particular-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',*/
		'type',
		'code',
		'description',
		/*
		'group1',
		'degree',
		'ngas',
		'group2',
		'percentage',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}&nbsp;{update}',
		),
	),
	'cssFile' => Yii::app()->baseUrl . '/css/grdview.css',
)); ?>