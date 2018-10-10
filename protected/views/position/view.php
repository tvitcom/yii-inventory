<?php
/* @var $this PositionController */
/* @var $model Position */

$this->breadcrumbs = array(
    'Positions' => array('position/admin'),
    $model->name,
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Position'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Position'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Position'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Position'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Position'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Position'); ?> #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'label' => 'Emplacement',
            'value' => $model->emplacement->name,
        ),
        'name',
        'description',
        'is_manager',
    ),
));
?>
