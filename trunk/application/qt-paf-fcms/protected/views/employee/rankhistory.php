<?php
$this->breadcrumbs=array(
	'Employee'=>array('/employee'),
	'Rankhistory',
);

$this->menu=array(
	array('label'=>'Back to your profile', 'url'=>array('/employee/view' ,'id'=>Yii::app()->user->id)),
	array('label'=>'Payroll Ledger', 'url'=>array('/employee/payledger', 'id'=>Yii::app()->user->id)), 
	array('label'=>'Claim Ledger', 'url'=>array('/employee/particulars', 'id'=>Yii::app()->user->id)),
	array('label'=>'Rank History', 'url'=>array('/employee/rankhistory', 'id'=>Yii::app()->user->id)),
	array('label'=>'Unit History', 'url'=>array('/employee/unithistory', 'id'=>Yii::app()->user->id)),
);

?>

<?php $count= 0; $employeeid= $model->id;?>

<h1>Your Rank History</h1>

<?php $rank = RankHistory::model()->findAll(array('condition'=>'employee_id = :a','params'=> array(':a'=>$model->id), 'order'=>'date DESC'));?>
<?php if (count($rank) !== 0){?>
<br>
<table>
	<thead> <tr> <th></th> <th>Rank</th> <th>Effective Date</th> </tr> </thead>
<?php foreach ($rank as $row) { ?>

		<tr>
		<td><?php echo $count += 1; ?></td>
		<td><?php echo $row->rank->description; ?></td>
		<td><?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($row->date, 'long', false)); ?></td>
		</tr>
<?php }} ?>
</table>


