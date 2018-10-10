<?php
/* @var $this UtypeController */
/* @var $model Utype */

$this->breadcrumbs = array(
    'Utypes' => array('admin'),
    $model->name,
);

$this->menu = array(
//array('label'=> Yii::t('site','List Utype'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Utype'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Utype'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Utype'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Utype'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Utype'); ?> #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'short_name',
    ),
));
?>
