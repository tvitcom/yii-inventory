<?php
/* @var $this SoftwareController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Softwares',
);

$this->menu=array(
array('label'=>Yii::t('site','Create Software'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage Software'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Softwares');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
