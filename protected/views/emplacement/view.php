<?php
/* @var $this EmplacementController */
/* @var $model Emplacement */

$this->breadcrumbs = array(
    'Emplacements' => array('index'),
    $model->name,
);

$this->menu = array(
    //array('label' => Yii::t('site', 'List Emplacement'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Emplacement'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Emplacement'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Emplacement'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Emplacement'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Emplacement'); ?> #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'label' => Yii::t('site', 'Location'),
            'value' => $model->location->name,
        ),
        'office_num',
        'name',
        'map_coords',
    ),
));
?>
