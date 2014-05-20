<h1>Nueva Tarea</h1>
<?php
$form=$this->beginWidget('CActiveForm');?>
<div>
<?php echo $form->labelEx($model,'usuario');?>
<?php echo $form->textField($model,'usuario');?>
<?php echo $form->error($model,'usuario');?>
</div>

<div>
<?php echo $form->labelEx($model,'password');?>
<?php echo $form->textField($model,'password');?>
<?php echo $form->error($model,'password');?>
</div>
<?php echo CHtml::submitButton('Crear');?>
<?php
$this->endWidget();
?>

