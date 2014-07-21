<?php
$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List of Transactions', 'url'=>array('index')),
	array('label'=>'Create Transaction', 'url'=>array('create')),
	array('label'=>'Update Transaction', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Transaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaction', 'url'=>array('admin')),
);
?>

<h1>Transaction #<?php echo $model->number; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->request->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		/**'id',*/
		'number',
		/**'employee_id',
		'particular_id',*/
		array(
            'name'=>'payroll_id',
            'value'=>$model->payroll->number,
        ),
		array(
            'name'=>'employee_id',
            'value'=>$model->employee->Names,
        ),
        array(
            'name'=>'particular_id',
            'value'=>$model->particular->description,
        ),
		'status',
		array(
    		'name' => 'period_from',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->period_from, 'long', false)),
		),
		array(
    		'name' => 'period_to',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->period_to, 'long', false)),
		),
		array(
            'name'=>'department_id',
            'value'=>$model->department->description,
        ),
        array(
    		'name' => 'date_modified',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->date_modified, 'long', false)),
		),
		array(
    		'name' => 'date_received',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->date_received, 'long', false)),
		),
		array(
    		'name' => 'date_submitted',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->date_submitted, 'long', false)),
		),
		'amount',
		/**'payroll_id',
		'department_id',*/
		
        
	),
)); ?>
