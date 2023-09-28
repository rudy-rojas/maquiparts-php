<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page">

		<header id="header">
			<a href="<?php echo Yii::app()->homeUrl; ?>">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.svg"? alt="logo" width= "260"> 
</a>
		</header><!-- header -->

		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu', array(
				'items' => array(
					array('label' => 'Home', 'url' => array('/site/index')),
					array('label' => 'Repuestos', 'url' => array('/spares/admin')),
					array('label' => 'Maquinas', 'url' => array('/machines/admin')),
					array('label' => 'Deudores', 'url' => array('/debtors/admin')),
					// array('label' => 'ADMINISTRACION', 'url' => array('/site/admin')),
					// array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
					// array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
				),
			)); ?>
		</div><!-- mainmenu -->
		<?php if (isset($this->breadcrumbs)) : ?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links' => $this->breadcrumbs,
			)); ?>
			<!-- breadcrumbs -->
		<?php endif ?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by Maquiparts.<br />
			All Rights Reserved.<br />
			<!-- <?php echo Yii::powered(); ?> -->
		</div><!-- footer -->

	</div><!-- page -->

</body>

</html>