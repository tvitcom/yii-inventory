<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs = array(
    'Accounts' => array('index'),
    $model->id,
);

$this->menu = array(
    //array('label' => Yii::t('site', 'List Account'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Account'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Account'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Account'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Account'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Account'); ?> #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'label' => 'position_id',
            'value' => $model->position->name,
        ),
        array(
            'label' => 'software_id',
            'value' => $model->software->name,
        ),
        'login',
        'pasword',
        'digi_certs',
        'restore_phone',
        'restore_email',
        'restore_responce',
        'uri_addr',
        'last_update',
    ),
));
?>
