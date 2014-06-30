<?php
$this->pageTitle=Yii::app()->name . ' - Admin';
$this->breadcrumbs=array(
	'Admin',
);

?>

<!---employee--->
<strong>Employee Management</strong>
<?php if (Yii::app()->user->role == "Admin"){
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					
						array(
							'url'=>array('employee/index'),
							'label'=>'Employee',
							'visible'=>Yii::app()->user->checkAccess('employee.index')
							),
						array(
							'url'=>'index.php?r=user/index', 
							'label'=>'Account',
							'visible'=>Yii::app()->user->checkAccess('user.index')
							),
				
						),
));

}else {

	 $this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					
						array(
							'url'=>array('employee/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Employee',
							'visible'=>Yii::app()->user->checkAccess('employee.index')
							),
						array(
							'url'=>'index.php?r=user/index', 
							'label'=>'Account',
							'visible'=>Yii::app()->user->checkAccess('user.index')
							),				
						),
));
}?>

<!-------creating payroll-->
<strong>Payroll</strong>
<?php  if (Yii::app()->user->role == "Admin"){
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					
						array(
							'url'=>'index.php?r=payroll/index',
							'label'=>'Payroll Numbers',
							'visible'=>Yii::app()->user->checkAccess('Payroll.index')
							),
							

						),
)); 

}else{

$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					
						array(
							'url'=>array('Payroll/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Payroll Numbers',
							'visible'=>Yii::app()->user->checkAccess('Payroll.index')
							),
							

						),
)); 

}?>

<!--transaction of claims only-->
<strong>Claim Transaction</strong>
<?php if (Yii::app()->user->role == "Admin"){
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
						array(
							'url'=>'index.php?r=transaction/index',
							'label'=>'Transaction',
							'visible'=>Yii::app()->user->checkAccess('transaction.index')
							),
					),
)); 

}else if (Yii::app()->user->role == "department") {
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					
						array(
							'url'=>'index.php?r=transaction/index',
							'label'=>'Transaction',
							'visible'=>Yii::app()->user->checkAccess('transaction.index')
							),
							

						),
)); 
}else {
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					
						array(
							'url'=>array('transaction/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Transaction',
							'visible'=>Yii::app()->user->checkAccess('transaction.index')
							),
							),
)); 
}?>

<!--parang for database records lang-->
<strong>Records</strong>
<?php if (Yii::app()->user->role == "Admin"){
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					
						array(
							'url'=>'index.php?r=RankHistory/index',
							'label'=>'Rank History',
							'visible'=>Yii::app()->user->checkAccess('RankHistory.index')
							),
							array(
							'url'=>'index.php?r=UnitHistory/index',
							'label'=>'Unit History',
							'visible'=>Yii::app()->user->checkAccess('UnitHistory.index')
							),
						
							array(	
							'url'=>'index.php?r=status/index', 
							'label'=>'Employee Status',
							'visible'=>Yii::app()->user->checkAccess('status.index')
							),
							array(
							'url'=>'index.php?r=EmployeesHasPayroll/index',
							'label'=>'Payroll Records',
							'visible'=>Yii::app()->user->checkAccess('EmployeesHasPayroll.index')
							),
							

						),
)); 
}else{
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					
						array(
							'url'=>array('RankHistory/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Rank History',
							'visible'=>Yii::app()->user->checkAccess('RankHistory.index')
							),
							array(
							'url'=>array('UnitHistory/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Unit History',
							'visible'=>Yii::app()->user->checkAccess('UnitHistory.index')
							),
							array(	
							'url'=>array('status/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Employee Status',
							'visible'=>Yii::app()->user->checkAccess('status.index')
							),
							array(
							'url'=>array('EmployeeHasPayroll/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Payroll Records',
							'visible'=>Yii::app()->user->checkAccess('EmployeesHasPayroll.index')
							),
							

						),
));
}?>

 
<!--reference only. parang constant records lang-->
 
 <strong>Reference</strong>
<?php if (Yii::app()->user->role == "Admin"){ 
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
						array(
							'url'=>'index.php?r=rank/index', 
							'label'=>'Rank',
							'visible'=>Yii::app()->user->checkAccess('rank.index')
							),
						array(	
							'url'=>'index.php?r=unit/index', 
							'label'=>'Unit',
							'visible'=>Yii::app()->user->checkAccess('unit.index')
							),
						array(
							'url'=>'index.php?r=department/index',
							'label'=>'Departments Per Transaction',
							'visible'=>Yii::app()->user->checkAccess('department.index')
							),	
						array(
							'url'=>'index.php?r=particular/index',
							'label'=>'Collateral & Particular',
							'visible'=>Yii::app()->user->checkAccess('particular.index')
							),	
 						),
));
}else{
$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
						array(
							'url'=>array('rank/view' ,'id'=>Yii::app()->user->id), 
							'label'=>'Rank',
							'visible'=>Yii::app()->user->checkAccess('rank.index')
							),
						array(	
							'url'=>array('unit/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Unit',
							'visible'=>Yii::app()->user->checkAccess('unit.index')
							),
						array(
							'url'=>array('Department/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Department',
							'visible'=>Yii::app()->user->checkAccess('department.index')
							),
						array(
							'url'=>array('particular/view' ,'id'=>Yii::app()->user->id),
							'label'=>'Employee',
							'visible'=>Yii::app()->user->checkAccess('particular.index')
							),
				
						),
));
}?>
