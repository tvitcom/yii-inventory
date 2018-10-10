<?php
/* @var $this AccountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Accounts',
);

$this->menu = array(
//array('label'=>Yii::t('site','Create Account'), 'url'=>array('create')),
    array('label' => Yii::t('site', 'Manage Account'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Accounts'); ?></h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
