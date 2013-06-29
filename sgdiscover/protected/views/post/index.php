<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>
<?php if(!empty($_GET['tag'])):?>
<h1>Posts tagged with <i><?php echo CHtml::encode($_GET['tag']);?></i></h1>
<?php endif; ?>


<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Primary',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
)); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'template' => "{items}\n{pager}",
)); ?>




<?php 
