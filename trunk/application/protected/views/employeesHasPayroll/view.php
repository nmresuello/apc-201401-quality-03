<?php
$this->breadcrumbs=array(
	'Employees Has Payrolls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List of Employees payroll', 'url'=>array('index')),
	array('label'=>'Create Employees payroll', 'url'=>array('create')),
	array('label'=>'Update Employees payroll', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Employees payroll', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employees payroll', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->employee->Names; ?>'s Payroll</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->request->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		/** 'id', 
		'payroll_id',
		'employee_id', */
		array(
            'name'=>'payroll_id',
            'value'=>$model->payroll->number,
        ),
        array(
            'name'=>'employee_id',
            'value'=>$model->employee->Names,
        ),
	),
)); ?>
