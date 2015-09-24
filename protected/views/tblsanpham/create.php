<?php
/* @var $this TblsanphamController */
/* @var $model tblsanpham */

$this->breadcrumbs=array(
	'Tblsanphams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tblsanpham', 'url'=>array('index')),
	array('label'=>'Manage tblsanpham', 'url'=>array('admin')),
);
?>

<h1>Create tblsanpham</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>