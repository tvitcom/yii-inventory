<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs = array(
    'People' => array('person/admin'),
    $model->name,
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Person'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Person'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Person'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Person'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Person'), 'url' => array('admin')),
    array('label' => Yii::t('site', 'Create Employee'), 'url' => array('employee/create', 'applicant_id' => $model->id)),
);
?>

<h1><?php echo Yii::t('site', 'View Person'); ?> #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'user_id',
        'name',
        'fullname',
        't_birthday',
        'ident_code',
        'passport_data',
        'address_data',
        'photo_link',
        'contact_data',
        'is_enterpreneur',
    ),
));
?>
