<?php
/* @var $this UtypeController */
/* @var $model Utype */

$this->breadcrumbs = array(
    'Utypes' => array('admin'),
    'Manage',
);

$this->menu = array(
    //array('label' => Yii::t('site', 'List Utype'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Utype'), 'url' => array('create')),
);
?>

<h1><?php echo Yii::t('site', 'Manage Utypes'); ?></h1>

<p>
    <?php echo Yii::t('site', 'You may optionally enter a comparison operator'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) <?php echo Yii::t('site', 'at the beginning of each of your search values to specify how the comparison should be done.'); ?>
</p>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'utype-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'name',
        'short_name',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
