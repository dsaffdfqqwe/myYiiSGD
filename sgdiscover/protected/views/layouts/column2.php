<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container">
<div class="row">  
<div class="span9">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span3">

<div class="div div-plain">
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
?>

</div>    
       
<div class="div div-plain">
<h4 class="float-blue">DiscoverSG contact</h4>
<!--<div class="label-v">&nbsp;</div>-->
<h5>weichat：</h5>
<h5>QQgroup：327519305</h5>
<!--<a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d35f9aecb971be6ba3ed2950f0e8285cb5e773c394e5ac51e07770665dc1352c"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="新加坡活动群" title="新加坡活动群"> </a>
        <br><br>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=392824207&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:392824207:53" alt="有什么可以帮到您的？" title="有什么可以帮到您的？"> </a> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=53086424&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:53086424:53" alt="有什么可以帮到您的？" title="有什么可以帮到您的？"> </a>
</div>-->
    
	<!--<div id="sidebar">-->
	
	<!--</div>--><!-- sidebar -->
</div>
</div>      
</div>
<?php $this->endContent(); ?>