<?php
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


<!--<h1>View Post #<?php echo $model->id; ?></h1>-->

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


<?php /*$this->widget('bootstrap.widgets.TbDetailView', array(
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
));*/?>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'dataProvider'=>$model,
	'itemView'=>'_view',
        'template' => "{items}\n{pager}",
)); */?>

<table  class='table'>
	<tr>
		
			<h3>	
			<?php echo CHtml::link(CHtml::encode($model->title), array('view', 'id'=>$model->id)); ?>							
			</h3>
		
	</tr>
	<tr>
		<td>
                    <table class='table table-bordered table-striped list'>
                        <tbody>
                        <tr>
                                <td><i class="icon-calendar"></i> <?php echo CHtml::encode(date('m-d',$model->day)); ?> <?php echo CHtml::encode(date('gA',$model->time)); ?>
                                </td>
                                <!--<td rowspan='5'
                                        style='width: 170px; padding-right: 20px; vertical-align: top;'
                                        class='hideMobile'><a href="/event/view/id/165"><img class="thumbnail" src="/images/cover/thumbnail165.png" alt="新加坡英语口语聚会" /></a></td>-->
                        </tr>
                        <tr>
                                <td><i class="icon-map-marker"></i> <a target='_blank'
                                        href='https://maps.google.com/maps?output=embed&q=singapore <?php echo CHtml::encode($model->location); ?>'><?php echo CHtml::encode($model->location); ?></a>
                                </td>
                        </tr>    
                        <tr>
                                <td><i class="icon-edit"></i><?php echo CHtml::encode($model->content); ?>
                                </td>
                        </tr>  
                        
                        <!--<tr>
                                <td><i class="icon-phone-sign icon-small"></i> 新知家 / <a href='tel:92345238'>92345238</a>					</td>
                        </tr>-->
                        </tbody>
                    </table>
                </td>
  
	</tr>
</table> 