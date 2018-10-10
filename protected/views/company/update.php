<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs = array(
    'Companies' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
//array('label'=>Yii::t('site','List Company'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Company'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Company'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Company'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Company'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>