<?php
/* @var $this TblsanphamController */
/* @var $model tblsanpham */

$this->breadcrumbs=array(
	'Tblsanphams'=>array('index'),
	$model->MaSP,
);

$this->menu=array(
	array('label'=>'List tblsanpham', 'url'=>array('index')),
	array('label'=>'Create tblsanpham', 'url'=>array('create')),
	array('label'=>'Update tblsanpham', 'url'=>array('update', 'id'=>$model->MaSP)),
	array('label'=>'Delete tblsanpham', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MaSP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tblsanpham', 'url'=>array('admin')),
);
?>

<h1>View tblsanpham #<?php echo $model->MaSP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MaSP',
		'MaLoaiSP',
		'TenSP',
		'MaNSX',
		'MaMau',
		'HinhAnh',
		'GiaBan',
		'ChietKhau',
		'SoLuongSP',
	),
)); ?>
