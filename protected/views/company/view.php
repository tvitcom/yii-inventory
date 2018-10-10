<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs = array(
    'Companies' => array('index'),
    $model->name,
);

$this->menu = array(
//array('label'=> Yii::t('site','List Company'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Company'), 'url' => array('create')),
    array('label' => Yii::t('site', 'Update Company'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Delete Company'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('site', 'Manage Company'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'View Company'); ?> #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'short_name',
        'company_site',
        'digi_certs',
    ),
));
?>
