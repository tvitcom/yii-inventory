<?php
/* @var $this LocationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Locations',
);

$this->menu=array(
array('label'=>Yii::t('site','Create Location'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage Location'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Locations');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
