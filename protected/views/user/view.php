<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=> Yii::t('site','List User'), 'url'=>array('index')),
array('label'=> Yii::t('site','Create User'), 'url'=>array('create')),
array('label'=> Yii::t('site','Update User'), 'url'=>array('update', 'id'=>$model->id)),
array('label'=> Yii::t('site','Delete User'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=> Yii::t('site','Manage User'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','View User');?> #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'id',
		'person_id',
		'company_id',
		'title',
		'login',
		'pass_hash',
		'pass_reset_token',
		'email',
		'ava_link',
		't_lastlogin',
		't_registered',
		'auth_key',
		'current_session_id',
		'is_active',
),
)); ?>
