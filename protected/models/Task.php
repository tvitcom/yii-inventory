<?php

/**
* This is the model class for table "tasks".
*
* The followings are the available columns in table 'tasks':
    * @property string $id
    * @property string $position_id
    * @property string $duties_id
    * @property string $status_id
    * @property string $t_create
    * @property string $t_start
    * @property string $t_finish
    * @property string $t_period
    * @property integer $is_urgency
    * @property string $description
    * @property integer $is_active
    *
    * The followings are the available model relations:
            * @property Duties $duties
            * @property Position $position
            * @property Status $status
    */
class Task extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'tasks';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('position_id, duties_id, status_id, t_create, t_start', 'required'),
                    array('is_urgency, is_active', 'numerical', 'integerOnly'=>true),
                    array('position_id, duties_id, status_id', 'length', 'max'=>21),
                    array('t_period', 'length', 'max'=>14),
                    array('description', 'length', 'max'=>256),
                    array('t_finish', 'safe'),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, position_id, duties_id, status_id, t_create, t_start, t_finish, t_period, is_urgency, description, is_active', 'safe', 'on'=>'search'),
        );
    }

    /**
    * @return array relational rules.
    */
    public function relations()
    {
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array(
            'duties' => array(self::BELONGS_TO, 'Duties', 'duties_id'),
            'position' => array(self::BELONGS_TO, 'Position', 'position_id'),
            'status' => array(self::BELONGS_TO, 'Status', 'status_id'),
        );
    }

    /**
    * @return array customized attribute labels (name=>label)
    */
    public function attributeLabels()
    {
    return array(
            'id' => Yii::t('site','ID'),
            'position_id' => Yii::t('site','task-author'),
            'duties_id' => Yii::t('site','Duties'),
            'status_id' => Yii::t('site','Status'),
            't_create' => Yii::t('site','T Create'),
            't_start' => Yii::t('site','T Start'),
            't_finish' => Yii::t('site','T Finish'),
            't_period' => Yii::t('site','T Period'),
            'is_urgency' => Yii::t('site','Is Urgency'),
            'description' => Yii::t('site','Description'),
            'is_active' => Yii::t('site','Is Active'),
        );
    }

    /**
    * Retrieves a list of models based on the current search/filter conditions.
    *
    * Typical usecase:
    * - Initialize the model fields with values from filter form.
    * - Execute this method to get CActiveDataProvider instance which will filter
    * models according to data in model fields.
    * - Pass data provider to CGridView, CListView or any similar widget.
    *
    * @return CActiveDataProvider the data provider that can return the models
    * based on the search/filter conditions.
    */
    public function search()
    {
    // @todo Please modify the following code to remove attributes that should not be searched.

    $criteria=new CDbCriteria;

    		$criteria->compare('id',$this->id,true);
		$criteria->compare('position_id',$this->position_id,true);
		$criteria->compare('duties_id',$this->duties_id,true);
		$criteria->compare('status_id',$this->status_id,true);
		$criteria->compare('t_create',$this->t_create,true);
		$criteria->compare('t_start',$this->t_start,true);
		$criteria->compare('t_finish',$this->t_finish,true);
		$criteria->compare('t_period',$this->t_period,true);
		$criteria->compare('is_urgency',$this->is_urgency);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('is_active',$this->is_active);

    return new CActiveDataProvider($this, array(
    'criteria'=>$criteria,
    'pagination' => array(
    'pageSize' => 100,
    ),
    ));
    }

        /**
    * Returns the static model of the specified AR class.
    * Please note that you should have this exact method in all your CActiveRecord descendants!
    * @param string $className active record class name.
    * @return Task the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
