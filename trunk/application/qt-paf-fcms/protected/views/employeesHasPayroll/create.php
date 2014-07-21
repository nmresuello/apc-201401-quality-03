<?php
$this->breadcrumbs=array(
	'Employees Payrolls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List of Employees Payroll', 'url'=>array('index')),
	array('label'=>'Manage Employees Payroll', 'url'=>array('admin')),
);
?>

<h1>Create EmployeesHasPayroll</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>