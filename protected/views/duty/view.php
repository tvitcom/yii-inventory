<?php
/* @var $this DutyController */
/* @var $model Duty */

$this->breadcrumbs = array(
    'Duties' => array('index'),
    $model->name,
);

$this->menu = array(
//array('label'=> Yii::t('site','List Duty'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Duty'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Duty'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Duty'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Duty'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Duty'); ?> #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'responsibility',
        'with_team_id',
        'position_id',
    ),
));
?>
