<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs = array(
    'Companies' => array('index'),
    'Manage',
);

$this->menu = array(
//array('label'=> Yii::t('site','List Company'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Company'), 'url' => array('create')),
);
?>

<h1><?php echo Yii::t('site', 'Manage Companies'); ?></h1>

<?php echo CHtml::link(Yii::t('site', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'company-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'name',
        'short_name',
        'company_site',
        //'digi_certs',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
