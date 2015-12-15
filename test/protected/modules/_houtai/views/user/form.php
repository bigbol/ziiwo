<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a class="tip-bottom" href="index.html" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
            <a href="./index.php?r=user" class="tip-bottom" data-original-title="跳转用户列表">用户列表</a>
            <a class="current">添加用户</a>
        </div>
        <h1>添加用户</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-info-sign"></i>									
                        </span>
                        <h5>添加用户</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <div class='form-horizontal'>
                            <div class="form">
                                <?php
                                $form = $this->beginWidget('CActiveForm', array(
                                    'id' => 'user-form-form',
                                    'enableAjaxValidation' => false,
                                ));
                                ?>
                                <div class="control-group">
                                    <?php echo $form->label($model, 'username', array('class' => 'control-label')); ?>
                                    <div class="controls">
                                        <?php echo $form->textField($model, 'username', array('class' => 'span3')); ?>
                                        <?php echo $form->error($model, 'username', array('class' => "label label-important")); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form->label($model, 'useremail', array('class' => 'control-label')); ?>
                                    <div class="controls">
                                        <?php echo $form->textField($model, 'useremail', array('class' => 'span3')); ?>
                                        <?php echo $form->error($model, 'useremail', array('class' => "label label-important")); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form->label($model, 'userpassword', array('class' => 'control-label')); ?>
                                    <div class="controls">
                                        <?php echo $form->passwordField($model, 'userpassword', array('class' => 'span3')); ?>
                                        <?php echo $form->error($model, 'userpassword', array('class' => "label label-important")); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo $form->label($model, 'photo', array('class' => 'control-label')); ?>
                                    <div class="controls">
                                        <?php echo $form->textField($model, 'photo', array('class' => 'span3')); ?>
                                        <?php echo $form->error($model, 'photo', array('class' => "label label-important")); ?>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" class="btn btn-success" value="添&nbsp;加">
                                </div>
                                <?php $this->endWidget(); ?>
                            </div><!-- form -->
                        </div>
                    </div>
                </div>			
            </div>
        </div>
    </div>
</div>