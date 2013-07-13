<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="span12">
              
	
	
		
                    <table class='table table-bordered table-striped list'>
                        <tbody>
                         <tr>
		<td colspan="2">
				
	        <?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>	
                    	
			
                </td>		
	</tr>   
                        <tr>
                            <td style="background: white"><i class="icon-calendar"></i> <?php echo CHtml::encode(date('m-d',$data->day)); ?> <?php echo CHtml::encode(date('gA',$data->time)); ?>
                                </td>
                                <td rowspan='5'
                                        style='width: 300px; padding-right: 20px; vertical-align: top;'
                                        class='hideMobile'><a href=<?php echo CHtml::link("", array('view', 'id'=>$data->id)); ?><img class="thumbnail" src="http://127.0.0.1/yii/sgdiscover/images/pic/<?php echo mt_rand(1,65)?>.jpg" alt="" /></a></td>
                        </tr>
                        <tr>
                                <td style="background: white"><i class="icon-map-marker"></i> <a target='_blank'
                                        href='https://maps.google.com/maps?output=embed&q=singapore <?php echo CHtml::encode($data->location); ?>'><?php echo CHtml::encode($data->location); ?></a>
                                </td>
                        </tr>    
                        <tr>
                                <td  style="background: white"><i class="icon-edit"></i><?php echo CHtml::encode($data->content); ?>
                                </td>
                        </tr>  
                        
                        <!--<tr>
                                <td><i class="icon-phone-sign icon-small"></i> 新知家 / <a href='tel:92345238'>92345238</a>					</td>
                        </tr>-->
                        </tbody>
                    </table>
                
  
	


</div>