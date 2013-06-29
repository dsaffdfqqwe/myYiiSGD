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


<?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
    'title' => 'NB盒子',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Language</th>
        <th>Hours worked</th>
    </tr>
    </thead>
    <tbody>
        <tr class="odd">
        <td>1</td><td>Mark</td><td>Otto</td><td>css</td><td>10</td>
        </tr>
        <tr class="even">
        <td>2</td><td>Jacob</td><td>Thornton</td><td>JavaScript</td><td>20</td>
        </tr>
        <tr class="odd">
        <td>3</td><td>Stu</td><td>Dent</td><td>HTML</td><td>15</td>
        </tr>
    </tbody>
</table>
<?php $this->endWidget();?>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'id', 'header'=>'#'),
        array('name'=>'firstName', 'header'=>'First name'),
        array('name'=>'lastName', 'header'=>'Last name'),
        array('name'=>'language', 'header'=>'Language'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>



<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
    'attributes'=>array(
        array('name'=>'firstName', 'label'=>'First name1'),
        array('name'=>'lastName', 'label'=>'Last name'),
        array('name'=>'language', 'label'=>'Language'),
    ),
)); ?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'template' => "{items}\n{pager}",
)); ?>




<?php 
