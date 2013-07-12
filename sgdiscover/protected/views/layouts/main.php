<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->


        
        <!--<script type="text/javascript" src="/yii/sgdiscover/assetsex/timepicker/jquery-ui-sliderAccess.js"></script>
        <script type="text/javascript" src="/yii/sgdiscover/assetsex/timepicker/jquery-ui-timepicker-addon.js"></script>
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assetsex/timepicker/jquery-ui-timepicker-addon.css" />
        --> 
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body> 
<div class="container" id="page">

	<!--<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div>--><!-- header -->

	<div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */?>
            
                <?php $this->widget('bootstrap.widgets.TbNavbar', array(
                'brand' => 'Sgdiscovery',
                'type' => 'inverse',
                 //'stacked'=>false, 
                'items' => array(
                array(
                'class' => 'bootstrap.widgets.TbMenu',
                'items' => array(
                    array('label'=>'Home', 'url'=>array('/site/index'), 'active'=>true),
                    //array('label'=>'Bus', 'url'=>array('http://127.0.0.1/yii/sgdiscover/assets/busroutersg/')),
                    //array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    )))));?>
            
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

               
                
	<?php echo $content; ?>

	<div class="clear"></div>

	<!--<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div>--><!-- footer -->
        
        <div id="footer">
		<div class='container'>
			<!--<div class='row-fluid'>
				<div class='span12'>
					<a href="">About</a>					&nbsp;
					<a href="">Contact</a>					&nbsp;
					<a href="">Policy</a>					&nbsp;
					<a href="">Help</a>				</div>
			</div>-->

			<div class='row-fluid'>
				<div class='span12'>
					&copy; Copyright 2011–2013 All Rights Reserved. This website was
					powered by
					<a href="/category/view">Sg Discovery</a>					<br />

				</div>
			</div>
			<div class='row-fluid'>
				<div class='span12'>
                                            <a href='http://huasing.org/' target='_blank'>华新bbs					</a> &nbsp;
                                            <a href='http://www.chinaembassy.org.sg/' target='_blank'>中国驻新大使馆					</a> &nbsp;
                                            <a href='http://www.hdb.gov.sg/' target='_blank'>新加坡政府组屋					</a> &nbsp;
                                            <a href='http://www.publictransport.sg/content/publictransport/en/homepage.html' target='_blank'>sg public transport					</a> &nbsp;
                                            <a href='http://127.0.0.1/yii/sgdiscover/assets/busroutersg/' target='_blank'>sg bus					</a> &nbsp;
                                           
                                            <!--<a href='http://www.huaren.sg' target='_blank'>新加坡华人网					</a> &nbsp;
                                            <a href='http://www.wangzhan.sg' target='_blank'>新加坡网站导航-->					</a> &nbsp;
                                </div>
			</div>
		</div>
	</div>

</div><!-- page -->

</body>
</html>
