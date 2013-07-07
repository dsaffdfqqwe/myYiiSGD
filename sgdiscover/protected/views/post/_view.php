<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="span9">
        
	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('day')); ?>:</b>
	<?php echo CHtml::encode($data->day); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />-->
        
   
<?php /*$box = $this->beginWidget('bootstrap.widgets.TbBox', array(
    'title' => CHtml::encode($data->title),
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
));*/ ?>
<!--
<table class="table">
    <thead>
    <tr>
        <th>#</th>
    </tr>
    </thead>--
    <tbody>
    <tr>
        <td><i class='icon-th-list'></i> 20</td>
    </tr>
        
    </tbody>
</table>
--> 
<?php /*$this->endWidget();*/?>
  
 
<table  class='table'>
	<tr>
		
			<h3>	
			<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>							
			</h3>
		
	</tr>
	<tr>
		<td>
                    <table class='table table-bordered table-striped list'>
                        <tbody>
                        <tr>
                                <td><i class="icon-calendar"></i> <?php echo CHtml::encode(date('m-d',$data->day)); ?> <?php echo CHtml::encode(date('gA',$data->time)); ?>
                                </td>
                                <!--<td rowspan='5'
                                        style='width: 170px; padding-right: 20px; vertical-align: top;'
                                        class='hideMobile'><a href="/event/view/id/165"><img class="thumbnail" src="/images/cover/thumbnail165.png" alt="新加坡英语口语聚会" /></a></td>-->
                        </tr>
                        <tr>
                                <td><i class="icon-map-marker"></i> <a target='_blank'
                                        href='https://maps.google.com/maps?output=embed&q=<?php echo CHtml::encode($data->location); ?>'><?php echo CHtml::encode($data->location); ?></a>
                                </td>
                        </tr>    
                        <tr>
                                <td><i class="icon-edit"></i><?php echo CHtml::encode($data->content); ?>
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



 

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
	<?php echo CHtml::encode($data->author_id); ?>
	<br />

	 */?>


</div>