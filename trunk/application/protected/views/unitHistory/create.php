<?php
$this->breadcrumbs=array(
	'Unit Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnitHistory', 'url'=>array('index')),
	array('label'=>'Manage UnitHistory', 'url'=>array('admin')),
);
?>

<h1>Create Unit History</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>