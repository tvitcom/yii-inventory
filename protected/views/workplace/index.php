<?php
/* @var $this WorkplaceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Workplaces',
);

$this->menu=array(
array('label'=>Yii::t('site','Create Workplace'), 'url'=>array('create')),
array('label'=>Yii::t('site','Manage Workplace'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Workplaces');?></h1>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
));?>
