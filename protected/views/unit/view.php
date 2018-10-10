<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs = array(
    Yii::t('site', 'Units') => array('unit/admin'),
    $model->name,
);

$this->menu = array(
    //array('label' => Yii::t('site', 'List Unit'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Unit'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Unit'), 'url' => array('update', 'id' => $model->id)),
    //Error!array('label' => Yii::t('site', 'Delete Unit'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Unit'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Unit'); ?> <b><?php echo ($model->inventory_num) ? $model->inventory_num : $model->id; ?></b></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'label' => Yii::t('site', 'type'), //'utype_id',
            'value' => $model->utype->name,
        ),
        array(
            'label' => Yii::t('site', 'emplacement'), //'emplacement_id',
            'value' => $model->emplacement->name,
        ),
        array(
            'label' => Yii::t('site', 'workplace'), //'workplace_id',
            'value' => $model->workplace->work_num,
        ),
        'name',
        'serial_num',
        'inventory_num',
        'mac_addr',
        'main_ipv4',
        'main_ipv6',
        'dt_purchase',
        'dt_endwarranty',
        'vendor_name',
        'cost',
        'documents',
        'is_broken',
        'broken_description',
    ),
));
