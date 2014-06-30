<?php
$this->breadcrumbs=array(
	'Employee'=>array('/employee'),
	'Payledger',
);


$this->menu=array(
	array('label'=>'Back to your profile', 'url'=>array('/employee/view' ,'id'=>Yii::app()->user->id)),
	array('label'=>'Payroll Ledger', 'url'=>array('/employee/payledger', 'id'=>Yii::app()->user->id)), 
	array('label'=>'Claim Ledger', 'url'=>array('/employee/particulars', 'id'=>Yii::app()->user->id)),
	array('label'=>'Rank History', 'url'=>array('/employee/rankhistory', 'id'=>Yii::app()->user->id)),
	array('label'=>'Unit History', 'url'=>array('/employee/unithistory', 'id'=>Yii::app()->user->id)),
);


?>

<h1>Payroll Ledger</h1>
<?php $employeeid= $model->id;?>


<?php $payroll=EmployeesHasPayroll::model()->findAll('employee_id = :a', array(':a'=>$model->id));?>
<?php if (count($payroll) !== 0){?>
<br>
<table>
	<thead> <tr><th>Payroll Number</th> <th>Payroll month</th> </tr> </thead>
<?php foreach ($payroll as $row) { ?>

		<tr>
		<td><?php echo $row->payroll->number; ?></td>
		<td><?php echo $row->payroll->month; ?></td>
		</tr>
<?php }} ?>
</table>