<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Update',
);\n";
?>

$this->menu=array(
array('label'=><?php echo "Yii::t('site','List " . $this->modelClass . "')"; ?>, 'url'=>array('index')),
array('label'=><?php echo "Yii::t('site','Create " . $this->modelClass . "')"; ?>, 'url'=>array('create')),
array('label'=><?php echo "Yii::t('site','View " . $this->modelClass . "')"; ?>, 'url'=>array('view', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
array('label'=><?php echo "Yii::t('site','Manage " . $this->modelClass . "')"; ?>, 'url'=>array('admin')),
);
?>

<h1><?php echo "<?php echo Yii::t('site','Update " . $this->modelClass . "');?> <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>