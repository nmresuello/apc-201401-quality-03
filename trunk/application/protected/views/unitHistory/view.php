<?php
$this->breadcrumbs=array(
	'Unit Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List of Unit Histories', 'url'=>array('index')),
	array('label'=>'Create UnitHistory', 'url'=>array('create')),
	array('label'=>'Update UnitHistory', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete UnitHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnitHistory', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->employee->Names; ?>'s unit history</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->request->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		/**'id',*/
		array(
            'name'=>'unit_id',
            'value'=>$model->unit->unit,
        ),
		array(
    		'name' => 'date',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->date, 'long', false)),
		),
		/**'unit_id',
		'employee_id',*/
	),
)); ?>
