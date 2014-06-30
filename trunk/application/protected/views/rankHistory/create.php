<?php
$this->breadcrumbs=array(
	'Rank Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RankHistory', 'url'=>array('index')),
	array('label'=>'Manage RankHistory', 'url'=>array('admin')),
);
?>

<h1>Create Rank History</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>