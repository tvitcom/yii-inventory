<?php
/* @var $this PersonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'People',
);

$this->menu=array(
array('label'=>Yii::t('site','Create Person'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage Person'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','People');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
