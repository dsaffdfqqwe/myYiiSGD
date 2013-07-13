

<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Create Post', 'url'=>array('create')),
	//array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>


<?php if(!empty($_GET['tag'])):?>
<h1>Posts tagged with <i><?php echo CHtml::encode($_GET['tag']);?></i></h1>
<?php endif; ?>

<div class="row-fluid">

<div class="span12">
    
<?php $this->widget('bootstrap.widgets.TbCarousel', array(
  'items'=>array(
      array(
		'image'=>'http://127.0.0.1/yii/sgdiscover/images/2.jpg',
		'label'=>'',
		'caption'=>'',
                'imageOptions' => array('width'=>'830','height'=>'400'),
                ),
      array(
		'image'=>'http://127.0.0.1/yii/sgdiscover/images/2.jpg',
		'label'=>'',
		'caption'=>'', 'imageOptions' => array('width'=>'830','height'=>'400'),),
      array(
		'image'=>'http://127.0.0.1/yii/sgdiscover/images/2.jpg',
		'label'=>'',
		'caption'=>'', 'imageOptions' => array('width'=>'830','height'=>'400'),),
  ),
));?>


</div>
</div>

    

<div class="row-fluid">    
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'template' => "{items}\n{pager}",
)); ?>
</div>

<!--<?php $this->widget('application.modules.user.components.LoginWidget'); ?>-->