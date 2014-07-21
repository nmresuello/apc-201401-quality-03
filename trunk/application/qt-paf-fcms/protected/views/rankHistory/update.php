<?php
$this->breadcrumbs=array(
	'Rank Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RankHistory', 'url'=>array('index')),
	array('label'=>'Create RankHistory', 'url'=>array('create')),
	array('label'=>'View RankHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RankHistory', 'url'=>array('admin')),
);
?>

<h1>Update <?php echo $model->employee->Names; ?>'s rank history</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>