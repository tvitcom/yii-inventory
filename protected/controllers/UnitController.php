<?php

class UnitController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            /*
              array('allow',  // allow all users to perform 'index' and 'view' actions
              'actions'=>array(),
              'users'=>array('*'),
              ),
             */
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'view', 'admin', 'getplaces'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('create', 'update', 'delete'),
                'users' => array('admin', 'director'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Unit;

//line for AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Unit'])) {
            $model->attributes = $_POST['Unit'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Unit'])) {
            $model->attributes = $_POST['Unit'];
            if ($model->save())
                $this->redirect(array('unit/admin'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin', 'kolya'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Unit');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Unit('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Unit']))
            $model->attributes = $_GET['Unit'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Unit the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Unit::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Unit $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'unit-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * TEST version droppdown list to dropdownlist
     */
    public function actionMyActionName() {
// CHtml::tag($tagName, $htmlOptions, $content, $closeTag)
        echo CHtml::tag('option', array('value' => '1'), // html params of tag
            CHtml::encode('hello'), // caption, string may be enough. CHtml::encode() may not be necessary.
            true                                   // close tag
        );
    }

    public function actionGetPlaces() {
       //if (isset($_POST['Unit']['emplacement_id']))
        $empl_id = intval($_POST['Unit']['emplacement_id']);

        $model = new Workplace();
        $rows = $model->getOwnPlaces($empl_id);

        if (!count($rows)) {
            echo '<option>'
            . Yii::t('site', 'Not availabel places in the it emplacement')
            . '</option>';
            Yii::app()->end();
        }
        //var_dump($rows);

        foreach ($rows as $row => $value) {
            echo CHtml::tag(
                'option', array('value' => $value['id']), CHtml::encode($value['work_num']), true
            );
        }
    }

}
