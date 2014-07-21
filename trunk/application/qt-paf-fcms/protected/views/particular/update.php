<?php
$this->breadcrumbs=array(
	'Particulars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Particular', 'url'=>array('index')),
	array('label'=>'Create Particular', 'url'=>array('create')),
	array('label'=>'View Particular', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Particular', 'url'=>array('admin')),
);
?>

<h1>Update <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>