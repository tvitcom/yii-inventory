<?php
/* @var $this SoftwareController */
/* @var $model Software */

$this->breadcrumbs=array(
	'Softwares'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=> Yii::t('site','List Software'), 'url'=>array('index')),
array('label'=> Yii::t('site','Create Software'), 'url'=>array('create')),
array('label'=> Yii::t('site','Update Software'), 'url'=>array('update', 'id'=>$model->id)),
array('label'=> Yii::t('site','Delete Software'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=> Yii::t('site','Manage Software'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','View Software');?> #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'id',
		'company_id',
		'name',
		'upload_link',
		'work_platform',
		'license_type',
		'license_text',
		'our_license_key',
		't_start',
		't_end',
		'is_licensed',
),
)); ?>
