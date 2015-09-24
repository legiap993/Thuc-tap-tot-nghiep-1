<?php
/* @var $this TblsanphamController */
/* @var $data tblsanpham */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaSP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MaSP), array('view', 'id'=>$data->MaSP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaLoaiSP')); ?>:</b>
	<?php echo CHtml::encode($data->MaLoaiSP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TenSP')); ?>:</b>
	<?php echo CHtml::encode($data->TenSP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaNSX')); ?>:</b>
	<?php echo CHtml::encode($data->MaNSX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaMau')); ?>:</b>
	<?php echo CHtml::encode($data->MaMau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HinhAnh')); ?>:</b>
	<?php echo CHtml::encode($data->HinhAnh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GiaBan')); ?>:</b>
	<?php echo CHtml::encode($data->GiaBan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ChietKhau')); ?>:</b>
	<?php echo CHtml::encode($data->ChietKhau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SoLuongSP')); ?>:</b>
	<?php echo CHtml::encode($data->SoLuongSP); ?>
	<br />

	*/ ?>

</div>