<?php
$this->breadcrumbs=array(
	'Payrolls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Payroll', 'url'=>array('index')),
	array('label'=>'Create Payroll', 'url'=>array('create')),
	array('label'=>'Update Payroll', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Payroll', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Payroll', 'url'=>array('admin')),
);
?>

<h1>View Payroll #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->request->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		/**'id', */
		'number',
		'month',
		'pay_year',
	),
)); ?>
