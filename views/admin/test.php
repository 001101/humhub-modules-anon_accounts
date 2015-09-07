<?php $form=$this->beginWidget('CActiveForm', array(
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	        		
	<?php // echo $form->error($model,'username'); ?>
	<?php // echo $form->labelEx($model,'username'); ?>
	<?php // echo $form->textField($model, 'username', array()); ?>
	<br />
	<?php echo $form->error($model,'email'); ?>
	<?php echo $form->labelEx($model,'email'); ?>
	<?php echo $form->textField($model, 'email', array('id' => 'email')); ?>
	<br />
	<?php echo $form->labelEx($model,'firstName'); ?>
	<?php echo $form->textField($model, 'firstName', array()); ?>
	<br />
	<?php echo $form->labelEx($model,'lastName'); ?>
	<?php echo $form->textField($model, 'lastName', array()); ?>
	<br />
	<?php echo $form->labelEx($model,'image'); ?>
	<?php echo $form->textArea($model, 'image', array('id' => 'image', 'class' => 'form-control', 'rows' => '8')); ?>
	<?php echo CHtml::submitButton('Submit', array('class' => ' btn btn-info pull-right', 'style' => 'margin-top: 5px;')); ?>


<?php $this->endWidget(); ?>



<canvas id="identicon" width="100" height="100" />
<script>
	$(function() {
		
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
        generateJdenticon("benmaggacis@gmail.com");

	});
</script>