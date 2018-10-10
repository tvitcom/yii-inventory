<?php
/* @var $this EmplacementController */
/* @var $model Emplacement */

$this->breadcrumbs = array(
    'Emplacements' => array('index'),
    'Manage',
);

$this->menu = array(
//array('label' => Yii::t('site', 'List Emplacement'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Emplacement'), 'url' => array('create')),
);
?>

<h1><?php echo Yii::t('site', 'Manage Emplacements'); ?></h1>

<p>
    <?php echo Yii::t('site', 'You may optionally enter a comparison operator'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) <?php echo Yii::t('site', 'at the beginning of each of your search values to specify how the comparison should be done.'); ?>
</p>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'emplacement-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
            'name' => 'location_id',
            'value' => '($data->location->name)?$data->location->name:$data->location->short_name'
        ),
        'office_num',
        'name',
        'map_coords',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
