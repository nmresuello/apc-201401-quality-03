<?php
$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List of Status', 'url'=>array('index')),
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'Update Status', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Status', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->employee->Names; ?>'s status</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->request->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		/** 'id',
		'employee_id',
		array(
            'name'=>'employee_id',
            'value'=>$model->employee->Names,
        ), */
		'active_inactive',
		array(
			'name'=>'inactive_date',
			'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->inactive_date, 'long', false)),
			'visible'=>$model->active_inactive=='inactive',
		),
		array(
			'name'=>'inactive_reason',
			'visible'=>$model->active_inactive=='inactive',
		),
	),
)); ?>
