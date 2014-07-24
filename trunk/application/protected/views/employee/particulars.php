<?php
$this->breadcrumbs=array(
	'Employee'=>array('/employee'),
	'Particulars',
);


$this->menu=array(
	array('label'=>'Back to your profile', 'url'=>array('/employee/view' ,'id'=>Yii::app()->user->id)),
	array('label'=>'Payroll Ledger', 'url'=>array('/employee/payledger', 'id'=>Yii::app()->user->id)), 
	array('label'=>'Claim Ledger', 'url'=>array('/employee/particulars', 'id'=>Yii::app()->user->id)),
	array('label'=>'Rank History', 'url'=>array('/employee/rankhistory', 'id'=>Yii::app()->user->id)),
	array('label'=>'Unit History', 'url'=>array('/employee/unithistory', 'id'=>Yii::app()->user->id)),
);


?>

<?php $employeeid= $model->id;?>

<h1>Claim Ledger</h1>

<?php $particular=Transaction::model()->findAll('employee_id = :a', array(':a'=>$model->id));?>
<?php if (count($particular) !== 0){?>
<br>
<table>
	<thead> <tr><th>Transaction Number</th> <th>Claim</th> <th>Claim Status</th> <th>Period Date</th> <th>Signed by Department</th> <th>Signed on</th> <th>Claim Amount</th> </tr> </thead>
<?php foreach ($particular as $row) { ?>

		<tr>
		<td><?php echo $row->number; ?></td>
		<td><?php echo $row->particular->description; ?></td>
		<td><?php echo $row->status; ?></td>
		<td><?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($row->period_from, 'long', false)).' to '.CHtml::encode(Yii::app()->dateFormatter->formatDateTime($row->period_to, 'long', false)); ?></td>
		<td><?php echo $row->department->description; ?></td>
		<td><?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($row->date_modified, 'long', false)); ?></td>
		<td><?php echo $row->amount; ?></td>
		</tr>
<?php }} ?>
</table>

