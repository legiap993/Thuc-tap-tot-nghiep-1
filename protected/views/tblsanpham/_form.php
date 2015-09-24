<?php
/* @var $this TblsanphamController */
/* @var $model tblsanpham */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tblsanpham-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MaSP'); ?>
		<?php echo $form->textField($model,'MaSP',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'MaSP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MaLoaiSP'); ?>
		<?php echo $form->textField($model,'MaLoaiSP',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'MaLoaiSP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TenSP'); ?>
		<?php echo $form->textField($model,'TenSP',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TenSP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MaNSX'); ?>
		<?php echo $form->textField($model,'MaNSX',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'MaNSX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MaMau'); ?>
		<?php echo $form->textField($model,'MaMau',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'MaMau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HinhAnh'); ?>
		<?php echo $form->textField($model,'HinhAnh',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'HinhAnh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GiaBan'); ?>
		<?php echo $form->textField($model,'GiaBan'); ?>
		<?php echo $form->error($model,'GiaBan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ChietKhau'); ?>
		<?php echo $form->textField($model,'ChietKhau'); ?>
		<?php echo $form->error($model,'ChietKhau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SoLuongSP'); ?>
		<?php echo $form->textField($model,'SoLuongSP'); ?>
		<?php echo $form->error($model,'SoLuongSP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->