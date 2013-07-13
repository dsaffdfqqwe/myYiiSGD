<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
//$statuss = array();
//$statuss = Lookup::items('PostStatus');

?>


<div class="form">


<?php /*$form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'post-form',
        'type'=>'horizontal',
    ));
        
?>
	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php /*echo $form->labelEx($model,'title');*/ ?>
		<?php /*echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128));*/ ?>
		<?php /*echo $form->error($model,'title');*/ ?>
            
                <?php echo $form->textFieldRow($model, 'title'); ?>
	</div>

        <!--<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>-->
    
	<div class="row">         
                <?php echo $form->textFieldRow($model, 'location'); ?>
	</div>
    
	<div class="row">
		<?php /*echo $form->labelEx($model,'begin_time');*/ ?>
		<?php /*echo $form->textField($model,'begin_time');*/ ?>
		<?php /*echo $form->error($model,'begin_time');*/ ?>
            
 <?php /* echo $form->datepickerRow($model, 'day',array('append'=>'<i class="icon-calendar"></i>')); */ ?>
 <div class="control-group">
  
     <label class="control-label" for="Post_day">Day</label>
     <div class="controls bootstrap-timepicker">     
 <div class="input-prepend">
     
 
 <span class="add-on"><i class="icon-calendar" style="cursor:pointer"></i></span>
     <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'name'=>'Post[day]',
    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'fold',
        'changeMonth' => true,
        'changeYear' => true
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;'
    ),
)); ?>

 
</div>        
</div>        
</div>        
          
	</div>
	<div class="row">
		<?php /* echo $form->labelEx($model,'end_time'); */?>
		<?php /* echo $form->textField($model,'end_time'); */?>
		<?php /* echo $form->error($model,'end_time'); */?>
           
         <?php echo $form->timepickerRow($model, 'time', array('prepend'=>'<i class="icon-time" style="cursor:pointer"></i>'));?>
	
        </div>

	

	<!--<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>-->
        <!--<div class="row">         
                <?php echo $form->textFieldRow($model, 'category'); ?>
	</div>-->

	<div class="row">
		<?php /*echo $form->labelEx($model,'content'); */?>
		<?php /*echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'content'); */?>
            <?php echo $form->textAreaRow($model, 'content', array('class'=>'span6', 'rows'=>10)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textArea($model,'tags',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>-->
        <!--
        <div class="row">         
                <?php echo $form->textFieldRow($model, 'tags'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>-->
         <!--<div class="row">         
                <?php echo $form->textFieldRow($model, 'url'); ?>
	 </div>-->

	<div class="row">
                <?php /* echo $form->labelEx($model,'status'); */?>
		<?php /*echo $form->textField($model,'status'); */?>
		<?php /*echo $form->error($model,'status'); */?>
                
		<?php /*echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); */?>
                <?php echo $form->dropDownListRow($model, 'status',array('1', '2', '3')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
<!--
	<div class="row">
		<?php /* echo $form->labelEx($model,'cost'); */?>
		<?php /* echo $form->textField($model,'cost',array('size'=>60,'maxlength'=>64)); */?>
		<?php /* echo $form->error($model,'cost'); */?>
                <?php echo $form->textFieldRow($model, 'cost'); ?>
	</div>
-->
	<!--<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>-->
       
	<!--<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id'); ?>
		<?php echo $form->error($model,'author_id'); ?>
	</div>-->
        <!--<div class="row">
             <?php echo $form->textFieldRow($model, 'author_id'); ?>
	</div>-->
<!--
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
-->    
    
    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Create')); ?>
       
    </div>
   
<?php $this->endWidget(); ?>

</div><!-- form -->