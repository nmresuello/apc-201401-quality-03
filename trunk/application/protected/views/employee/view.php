<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id,
);

// $user = User::model()->findByAttributes('employee_id = :name', array(':name'=>$model->id));
//$user = Yii::app()->user->role == "admin"; 

if (Yii::app()->user->role == "Admin"){
$this->menu=array(

	array('label'=>'List Employee', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('user.index')),
	array('label'=>'Create Employee', 'url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('user.create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->id),'visible'=>Yii::app()->user->checkAccess('user.update')),
	//array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee', 'url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('user.admin')),
	array('label'=>'Payroll Ledger', 'url'=>array('employee/payledger', 'id'=>Yii::app()->user->id)), 
	array('label'=>'Claim Ledger', 'url'=>array('employee/particulars', 'id'=>Yii::app()->user->id)),
	array('label'=>'Rank History', 'url'=>array('/employee/rankhistory', 'id'=>Yii::app()->user->id)),
	array('label'=>'Unit History', 'url'=>array('/employee/unithistory', 'id'=>Yii::app()->user->id)),
);

}else if (Yii::app()->user->role == "Employee"){
$this->menu=array(
	array('label'=>'Payroll Ledger', 'url'=>array('employee/payledger', 'id'=>Yii::app()->user->id)), 
	array('label'=>'Claim Ledger', 'url'=>array('employee/particulars', 'id'=>Yii::app()->user->id)),
	array('label'=>'Rank History', 'url'=>array('/employee/rankhistory', 'id'=>Yii::app()->user->id)),
	array('label'=>'Unit History', 'url'=>array('/employee/unithistory', 'id'=>Yii::app()->user->id)),
);

}
?>

<h1><?php echo $model->Names; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'cssFile' => Yii::app()->baseUrl . '/css/dtlview.css',
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'serialnum',
		'lname',
		'fname',
		'mname',
		'mobile_num',
		'gender',
		'birthdate',
		'address',
		'street',
		'city',
		'tin_num',
		'philhealth_num',
		'atm_num',
		'pagibig_num',
		'deduction',
		'pct_tax',
		'bir_exempt',
	),
)); ?>

<?php $employeeid= $model->id;?>

<?php

$empunit=new CDbCriteria;
$empunit->select='*';
$empunit->condition='employee_id=:id';
$empunit->params = array(':id'=>$model->id);
$empunit->order = 'date DESC';
$empunit->limit = '1';
$unit=UnitHistory::model()->findAll($empunit);

if (count($unit) !== 0){?>
<br>

<?php foreach ($unit as $row) { ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$row,
	'attributes'=>array(
		'unit.unit',
		'unit.subunit',
		array(
    		'name' => 'date',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($row->date, 'long', false)),
		),
	),
)); 
?>
<?php }} ?>

<?php

$emprank=new CDbCriteria;
$emprank->select='*';
$emprank->condition='employee_id=:id';
$emprank->params = array(':id'=>$model->id);
$emprank->order = 'date DESC';
$emprank->limit = '1';
$rank=RankHistory::model()->findAll($emprank);

?>
<?php if (count($rank) !== 0){?>
<br>
<h6>Current Rank</h6>
<?php foreach ($rank as $row) { ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$row,
	'attributes'=>array(
		'rank.description',
		array(
    		'name' => 'date',
    		'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($row->date, 'long', false)),
		),
	),
)); 
?>
<?php }} ?>