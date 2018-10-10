<?php
/* @var $this CompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Companies',
);

$this->menu = array(
//array('label'=>Yii::t('site','Create Company'), 'url'=>array('create')),
    array('label' => Yii::t('site', 'Manage Company'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Companies'); ?></h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
