<?php
/* @var $this UnitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Units',
);

$this->menu=array(
array('label'=>Yii::t('site','Create Unit'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage Unit'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Units');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
