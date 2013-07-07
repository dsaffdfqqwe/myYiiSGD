
?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);

//$this->widget('application.modules.user.components.LoginWidget'); 

?>


<h1>View Post #<?php echo $model->id; ?></h1>

<?php /* $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'begin_time',
		'end_time',
		'location',
		'category',
		'content',
		'tags',
		'url',
		'status',
		'cost',
		'create_time',
		'update_time',
		'author_id',
	),
));*/ ?>


<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array('name'=>'id', 'label'=>''),
        array('name'=>'title', 'label'=>''),
        array('name'=>'day', 'label'=>''),
        array('name'=>'time', 'label'=>''),
        array('name'=>'location', 'label'=>''),
        array('name'=>'category', 'label'=>''),
        array('name'=>'content', 'label'=>''),
        array('name'=>'tags', 'label'=>''),
        array('name'=>'url', 'label'=>''),
        array('name'=>'status', 'label'=>''),
        array('name'=>'cost', 'label'=>''),
        array('name'=>'status', 'label'=>''),
    ),
));?>
