<?php
/* @var $this WorkplaceController */
/* @var $model Workplace */

$this->breadcrumbs = array(
    'Workplaces' => array('workplace/admin'),
    'Manage',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Workplace'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Workplace'), 'url' => array('create')),
);
?>

<h1><?php echo Yii::t('site', 'Manage Workplaces'); ?></h1>

<p>
    <?php echo Yii::t('site', 'You may optionally enter a comparison operator'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) <?php echo Yii::t('site', 'at the beginning of each of your search values to specify how the comparison should be done.'); ?>
</p>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'workplace-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
            'name' => 'emplacement_id',
            'header' => Yii::t('site', 'Office'),
            'filter' => CHtml::listData(Emplacement::model()->findAll(array('order' => 'name')), 'id', 'name'),
            'value' => '$data->emplacement->name."(".$data->emplacement_id.")"',
        ),
        'work_num',
        'description',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
