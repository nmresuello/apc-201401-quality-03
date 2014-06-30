<?php
$this->breadcrumbs=array(
	'Employees Has Payrolls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List of Employees payroll', 'url'=>array('index')),
	array('label'=>'Create Employees payroll', 'url'=>array('create')),
	array('label'=>'View Employees payroll', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Employees payroll', 'url'=>array('admin')),
);
?>

<h1>Update <?php echo $model->employee->Names; ?>'s Payroll </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>