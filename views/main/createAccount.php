<?php
/**
 * Create account page, after the user clicked the email validation link.
 *
 * @property CFormModel $model is the create account form.
 * @property Boolean $needApproval indicates that new users requires admin approval.
 *
 * @package humhub.modules_core.user.views
 * @since 0.5
 */
$this->pageTitle = Yii::t('UserModule.views_auth_createAccount', '<strong>Account</strong> registration');
?>

<div class="container" style="text-align: center;">
    <h1 id="app-title" class="animated fadeIn"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
    <br/>
    <div class="row">
        <div id="create-account-form" class="panel panel-default animated bounceIn" style="max-width: 500px; margin: 0 auto 20px; text-align: left;">
            <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_createAccount', '<strong>Account</strong> registration'); ?></div>
            <div class="panel-body">
                <fieldset>
                    <legend>Account</legend>

                    <div class="row">
                        <div class="col-md-12 media" style="margin: 0 auto;">
                            <div href="#" class="pull-left profile-size-md">
                                <?php // echo CHtml::hiddenField($identiconForm->image, 'image', array('id' => 'image')); ?>
                                <div class="media-object profile-size-md img-rounded user-image" style="position:relative;">
                                    <canvas class="" id="identicon" width="40" height="40"></canvas>
                                    <div class="profile-overlay-img profile-overlay-img-md" style="position:absolute;top:0;left:0;"></div>
                                </div>
                            </div>

                            <div class="media-body">
                                <h4 class="media-heading">Email</h4>
                                <h5><?php echo $form['User']->model->email; ?></h5>
                            </div>
                            <br />
                        </div>
                    </div>                    
                </fieldset>
                
                <?php echo $form; ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        // set cursor to login field
        $('#UserPassword_newPassword').focus();

        // Update the jdenticon canvas and dataURL input value
        function generateJdenticon(value) {
            jdenticon.update("#identicon", md5(value));
            $("#image").val($("#identicon").get(0).toDataURL());
        }       

        // Listen for changes
        $( "#email" ).keypress(function() {
            generateJdenticon($(this).val());
        });

        $( "#email" ).change(function() {
            generateJdenticon(this.value);
        });

        // Init
        generateJdenticon("<?php echo $form['User']->model->email; ?>");

    })

    // Shake panel after wrong validation
<?php foreach ($form->models as $model) : ?>
    <?php if ($model->hasErrors()) : ?>
            $('#create-account-form').removeClass('bounceIn');
            $('#create-account-form').addClass('shake');
            $('#app-title').removeClass('fadeIn');
    <?php endif; ?>
<?php endforeach; ?>

</script>
