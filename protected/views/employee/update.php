<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->person->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>Yii::t('site','List Employee'), 'url'=>array('index')),
array('label'=>Yii::t('site','Create Employee'), 'url'=>array('person/admin')),
array('label'=>Yii::t('site','View Employee'), 'url'=>array('view', 'id'=>$model->id)),
array('label'=>Yii::t('site','Manage Employee'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Update Employee').'&nbsp'.Yii::t('site','for').'&nbsp'.$applicant->fullname;?></h1>

<?php $this->renderPartial('_form', array(
    'model'=>$model,
    'applicant'=>$applicant,
    ));