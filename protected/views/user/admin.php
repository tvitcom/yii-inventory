<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=> Yii::t('site','List User'), 'url'=>array('index')),
array('label'=> Yii::t('site','Create User'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#user-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1><?php echo Yii::t('site','Manage Users');?></h1>

<p>
    <?php echo Yii::t('site','You may optionally enter a comparison operator');?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) <?php echo Yii::t('site','at the beginning of each of your search values to specify how the comparison should be done.');?></p>

<?php echo CHtml::link(Yii::t('site','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'user-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'person_id',
		'company_id',
		'title',
		'login',
		'pass_hash',
		/*
		'pass_reset_token',
		'email',
		'ava_link',
		't_lastlogin',
		't_registered',
		'auth_key',
		'current_session_id',
		'is_active',
		*/
array(
'class'=>'CButtonColumn',
),
),
)); ?>
