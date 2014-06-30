<?php
$this->breadcrumbs=array(
	'Rank Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List of Rank Histories', 'url'=>array('index')),
	array('label'=>'Create Rank History', 'url'=>array('create')),
	array('label'=>'Update Rank History', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rank History', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rank History', 'url'=>array('admin')),
);
?>


<h1><?php echo $model->employee->Names; ?>'s rank history</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		/** 'id',
		'employee_id',
		'rank_id', */
		array(
            'name'=>'employee_id',
            'value'=>$model->employee->Names,
        ),
        array(
            'name'=>'rank_id',
            'value'=>$model->rank->name,
        ),
		array(
    		'name' => 'date',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->date, 'long', false)),
		),
	),
)); ?>