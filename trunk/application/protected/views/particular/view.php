<?php
$this->breadcrumbs=array(
	'Particulars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Particular', 'url'=>array('index')),
	array('label'=>'Create Particular', 'url'=>array('create')),
	array('label'=>'Update Particular', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Particular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Particular', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->request->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		/** 'id', */
		'type',
		'code',
		'description',
		'group1',
		'degree',
		'ngas',
		'group2',
		'percentage',
	),
)); ?>
