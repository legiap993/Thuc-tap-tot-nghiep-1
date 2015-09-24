<?php
/* @var $this TblsanphamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tblsanphams',
);

$this->menu=array(
	array('label'=>'Create tblsanpham', 'url'=>array('create')),
	array('label'=>'Manage tblsanpham', 'url'=>array('admin')),
);
?>

<h1>Tblsanphams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
