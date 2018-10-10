<?php
/* @var $this DutyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Duties',
);

$this->menu = array(
    array('label' => Yii::t('site', 'Create Duty'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Manage Duty'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Duties'); ?></h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
