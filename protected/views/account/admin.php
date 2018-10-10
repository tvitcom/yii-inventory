<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs = array(
    'Accounts' => array('index'),
    'Manage',
);

$this->menu = array(
    //array('label' => Yii::t('site', 'List Account'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Account'), 'url' => array('create')),
);
?>

<h1><?php echo Yii::t('site', 'Manage Accounts'); ?></h1>
<!--p>
<?php echo Yii::t('site', 'You may optionally enter a comparison operator'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) <?php echo Yii::t('site', 'at the beginning of each of your search values to specify how the comparison should be done.'); ?>
</p-->
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'account-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
            'name' => 'position_id',
            'header' => Yii::t('site', 'Position'),
            'value' => '$data->position->name',
        ),
        array(
            'name' => 'software_id',
            'header' => Yii::t('site', 'Software'),
            'value' => '$data->software->name',
        ),
        'login',
        'uri_addr',
        'last_update',
        /*
          'digi_certs',
          'pasword',
          'restore_phone',
          'restore_email',
          'restore_responce',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
