<?php
/* @var $this PositionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Positions',
);

$this->menu=array(
array('label'=>Yii::t('site','Create Position'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage Position'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Positions');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
