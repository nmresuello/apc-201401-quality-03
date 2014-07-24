<?php
$this->breadcrumbs=array(
	'Unit Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnitHistory', 'url'=>array('index')),
	array('label'=>'Create UnitHistory', 'url'=>array('create')),
	array('label'=>'View UnitHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UnitHistory', 'url'=>array('admin')),
);
?>

<h1>Update <?php echo $model->employee->Names; ?>'s unit history</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>