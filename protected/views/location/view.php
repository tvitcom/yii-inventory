<?php
/* @var $this LocationController */
/* @var $model Location */

$this->breadcrumbs=array(
	'Locations'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=> Yii::t('site','List Location'), 'url'=>array('index')),
array('label'=> Yii::t('site','Create Location'), 'url'=>array('create')),
array('label'=> Yii::t('site','Update Location'), 'url'=>array('update', 'id'=>$model->id)),
array('label'=> Yii::t('site','Delete Location'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=> Yii::t('site','Manage Location'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','View Location');?> #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'id',
		'company_id',
		'name',
		'address',
		'address_unofficial',
		'gps_coords',
),
)); ?>
