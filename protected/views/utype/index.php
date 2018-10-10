<?php
/* @var $this UtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Utypes',
);

$this->menu=array(
array('label'=>Yii::t('site','Create Utype'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage Utype'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Utypes');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
