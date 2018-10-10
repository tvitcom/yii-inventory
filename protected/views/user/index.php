<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
array('label'=>Yii::t('site','Create User'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage User'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Users');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
