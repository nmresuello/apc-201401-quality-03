<?php
$this->breadcrumbs=array(
	'Payrolls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Payroll List', 'url'=>array('index')),
	array('label'=>'Manage Payroll', 'url'=>array('admin')),
);
?>

<h1>Create Payroll</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>