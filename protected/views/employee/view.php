<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs = array(
    'Employees' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Employee'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Employee'), 'url' => array('person/admin')),
    array('label' => Yii::t('site', 'Update Employee'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Employee'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Employee'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Employee'); ?> #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'label' => Yii::t('site', 'Company'),
            'value' => $model->company->name,
        ),
        array(
            'label' => Yii::t('site', 'Person'),
            'value' => $model->person->name,
        ),
        array(
            'label' => Yii::t('site', 'Position'),
            'value' => $model->position->name,
        ),
        't_start',
        't_end',
        'end_reason',
    ),
));
?>
