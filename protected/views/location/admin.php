<?php
/* @var $this LocationController */
/* @var $model Location */

$this->breadcrumbs = array(
    'Locations' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Location'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Location'), 'url' => array('create')),
);
?>

<h1><?php echo Yii::t('site', 'Manage Locations'); ?></h1>
<!--p>
<?php echo Yii::t('site', 'You may optionally enter a comparison operator'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) <?php echo Yii::t('site', 'at the beginning of each of your search values to specify how the comparison should be done.'); ?>
</p-->
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'location-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'name',
        'address',
        'address_unofficial',
        'gps_coords',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
