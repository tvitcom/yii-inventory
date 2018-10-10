<?php
/* @var $this WorkplaceController */
/* @var $model Workplace */

$this->breadcrumbs = array(
    'Workplaces' => array('workplace/admin'),
    $model->id,
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Workplace'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Workplace'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Workplace'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Workplace'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Workplace'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Workplace') . ' (' . $model->emplacement->name . '): #' . $model->work_num; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'label' => Yii::t('site', 'Emplacement'),
            'value' => $model->emplacement->name,
        ),
        'work_num',
        'description',
    ),
));
?>
