<?php $this->pageTitle=Yii::app()->name; ?>

<div id="menu">
<?php $this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					array('label'=>'Admin',
						'url'=>'index.php?r=site/page&view=admin',
						'visible'=>!Yii::app()->user->checkAccess('employee')
						),
						/** array(
							'url'=>'index.php?r=employee/view', 
							'label'=>'Records',
							'icon'=>'list',
							'visible'=>Yii::app()->user->checkAccess('employee.view')
							),
						array(
							'url'=>'index.php?r=equipment/index', 
							'label'=>'Equipment',
							'icon'=>'list',
							'visible'=>Yii::app()->user->checkAccess('equipment.index')
							),
						array(
							'url'=>'index.php?r=facility/index', 
							'label'=>'Facility',
							'icon'=>'list',
							'visible'=>Yii::app()->user->checkAccess('facility.index')
							),
						array(	
							'url'=>'index.php?r=stock/index', 
							'label'=>'Stock',
							'icon'=>'list',
							'visible'=>Yii::app()->user->checkAccess('stock.index')
							), */
						),
)); ?>

<?php $this->widget('zii.widgets.CMenu', array(
		'items'=>array(
					array('label'=>'Employee',
						'visible'=>Yii::app()->user->checkAccess('employee.view')
						),
						array(
							'url'=>'index.php?r=unitHistory/view',
							'label'=>'Records',
							'visible'=>Yii::app()->user->checkAccess('employee.view')
							),
						array(
							'url'=>'index.php?r=unitHistory/view', 
							'label'=>'Unit',
							'visible'=>Yii::app()->user->checkAccess('unitHistory.view')
							),
						array(
							'url'=>'index.php?r=rankHistory/view', 
							'label'=>'Rank',
							'visible'=>Yii::app()->user->checkAccess('rankHistory.view')
							),
						array(	
							'url'=>'index.php?r=stock/index', 
							'label'=>'Stock',
							'icon'=>'list',
							'visible'=>Yii::app()->user->checkAccess('stock.index')
							),
						),
)); ?>
</div>