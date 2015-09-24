<?php
/* @var $this TblsanphamController */
/* @var $model tblsanpham */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MaSP'); ?>
		<?php echo $form->textField($model,'MaSP',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MaLoaiSP'); ?>
		<?php echo $form->textField($model,'MaLoaiSP',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TenSP'); ?>
		<?php echo $form->textField($model,'TenSP',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MaNSX'); ?>
		<?php echo $form->textField($model,'MaNSX',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MaMau'); ?>
		<?php echo $form->textField($model,'MaMau',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HinhAnh'); ?>
		<?php echo $form->textField($model,'HinhAnh',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GiaBan'); ?>
		<?php echo $form->textField($model,'GiaBan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ChietKhau'); ?>
		<?php echo $form->textField($model,'ChietKhau'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SoLuongSP'); ?>
		<?php echo $form->textField($model,'SoLuongSP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->