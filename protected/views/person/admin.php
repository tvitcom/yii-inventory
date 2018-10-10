<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs = array(
    'People' => array('person/admin'),
    'Manage',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Person'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Person'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#person-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1><?php echo Yii::t('site', 'Manage People'); ?></h1>

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
    'id' => 'person-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'user_id',
        'name',
        'fullname',
        't_birthday',
        'ident_code',
        /*
          'passport_data',
          'address_data',
          'photo_link',
          'contact_data',
          'is_enterpreneur',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
