<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="header">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/title1.png" height="70" width="300" align="center"/>
		<div id="sysname">Financial Claim Monitoring System</div>
		<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'HOME', 'url'=>array('/site/index')),
				//array('label'=>'ABOUT', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'MENU', 'url'=>array('/site/page', 'view'=>'admin'), 'visible'=>Yii::app()->user->name=="admin"),
				array('label'=>'APPROVAL OF CLAIMS','url'=>array('/transaction/admin'), 'visible'=>Yii::app()->user->name=="department"),
				array('label'=>'PROFILE', 'url'=>array('/employee/view' ,'id'=>Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),			
				array('label'=>'MAIL','url'=>array('/mailbox'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'FORUM','url'=>array('/forum'), 'visible'=>!Yii::app()->user->isGuest),
				/*array('label'=>'CONTACT', 'url'=>array('/site/contact')),*/
				//array('label'=>'LOGIN', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				/*array('label'=>'LOGOUT ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)*/
			),
		)); ?>
		
	</div><!-- mainmenu -->
	<p style="text-align:right;margin-top:-40px;margin-right:190px;margin-bottom:-1px;">
		<b style="font-size:20px;color:#004199;"><?php echo date("j F Y"); ?></b><br>
		<?php if (!Yii::app()->user->isGuest) echo "<b>Welcome, " .Yii::app()->user->name. ". </b><i>" .CHtml::link('Logout' ,array('/site/logout')). "</i>" ?>
		</p>
</div><!-- header -->

<div class="container" id="page">
	<br>
    <?php echo $content; ?>

</div><!-- page -->


	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> &nbsp; by PAF-FCMS SS101&nbsp;&nbsp;
		All Rights Reserved.&nbsp;&nbsp;
		<i style=""><?php echo Yii::powered(); ?></i><br>
		<img src="<?php echo Yii::app()->baseUrl; ?>/images/apc.png" height="70" style="opacity:0.8" align="center"/>
	</div><!-- footer -->

</body>
</html>
