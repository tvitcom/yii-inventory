<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs = array(
    Yii::t('site', 'Units') => array('unit/admin'),
    Yii::t('site', 'Manage'),
);

$this->menu = array(
    //array('label' => Yii::t('site', 'List Unit'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Unit'), 'url' => array('create')),
);
?>

<h1><?php echo Yii::t('site', 'Manage Units'); ?></h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'unit-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        /* array(
          'header' => 'ID',
          'name' => 'id',
          'filter' => '',
          ), */
        'id',
        array(
            'header' => Yii::t('site', 'Emplacement'),
            'name' => 'emplacement_id',
            'filter' => CHtml::listData(Emplacement::model()->findAll(array('order' => 'name')), 'id', 'name'),
            'value' => '$data->emplacement->name',
        ),
        array(
            'header' => Yii::t('site', 'Workplace_num'),
            'name' => 'workplace_num',
            'value' => '$data->workplace->work_num',
            'filter' => CHtml::listData(Workplace::model()->findAll(array('order' => 'work_num', 'group' => 'work_num')), 'work_num', 'work_num'),
        ),
        array(
            'header' => Yii::t('site', 'Type'),
            'name' => 'utype_id',
            'filter' => CHtml::listData(Utype::model()->findAll(array('order' => 'name')), 'id', 'name'),
            'value' => '$data->utype->name',
        ),
        'name',
        array(
            'header' => Yii::t('site', 'Network'),
            'name' => 'main_ipv4',
            //'filter' => '',
            'value' => '$data->main_ipv4',
        ),
        'mac_addr',
        'inventory_num',
        array(
            'name' => 'is_broken',
            'header' => Yii::t('site', 'Broken?'),
            'filter' => array(0 => Yii::t('site', 'no'), 1 => Yii::t('site', 'yes')),
            'value' => '@$data->is_broken ? Yii::t("site","Alert") : Yii::t("site","ok")',
        ),
        /*
          'serial_num',
          'mac_addr',
          'main_ipv4',
          'main_ipv6',
          'dt_purchase',
          'dt_endwarranty',
          'vendor_name',
          'cost',
          'broken_description',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
