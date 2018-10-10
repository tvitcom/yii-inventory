<?php
/* @var $this EmplacementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emplacements',
);

$this->menu=array(
array('label'=>Yii::t('site','Create Emplacement'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage Emplacement'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Emplacements');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
