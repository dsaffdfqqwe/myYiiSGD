<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container-fluid">
    <div class="row-fluid" > 
        <div class="span8" style="background: white">
                <div id="content">
                        <?php echo $content; ?>
                </div><!-- content -->
        </div>
        
        <div class="span4" style="background: white">
            <div class="span4 div div-plain">
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

            <div class="span4 div-plain">
            <h4 class="float-blue">DiscoverSG contact</h4>
            <h5>weichat：</h5>
            <h5>QQgroup：327519305</h5>
            </div>
        </div>      
    </div>
</div>
<?php $this->endContent(); ?>