<?php
/* @var $this TblsanphamController */
/* @var $model tblsanpham */

$this->breadcrumbs=array(
	'Tblsanphams'=>array('index'),
	$model->MaSP=>array('view','id'=>$model->MaSP),
	'Update',
);

$this->menu=array(
	array('label'=>'List tblsanpham', 'url'=>array('index')),
	array('label'=>'Create tblsanpham', 'url'=>array('create')),
	array('label'=>'View tblsanpham', 'url'=>array('view', 'id'=>$model->MaSP)),
	array('label'=>'Manage tblsanpham', 'url'=>array('admin')),
);
?>

<h1>Update tblsanpham <?php echo $model->MaSP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>