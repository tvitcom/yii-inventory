<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs = array(
    'Employees' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Employee'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Employee'), 'url' => array('person/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#employee-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1><?php echo Yii::t('site', 'Manage Employees'); ?></h1>

<p>
    <?php echo Yii::t('site', 'You may optionally enter a comparison operator'); ?> (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) <?php echo Yii::t('site', 'at the beginning of each of your search values to specify how the comparison should be done.'); ?></p>

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
    'id' => 'employee-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
            'name' => 'company',
            'value' => '($data->company->name)?$data->company->short_name:""',
        ),
        array(
            'name' => 'person',
            'value' => '($data->person->fullname)?$data->person->fullname:""',
        ),
        array(
            'name' => 'position',
            'value' => 'isset($data->position->name)?$data->position->name:"none"',
        ),
        't_start',
        't_end',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
