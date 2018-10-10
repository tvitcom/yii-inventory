<?php

/**
* This is the model class for table "duties".
*
* The followings are the available columns in table 'duties':
    * @property string $id
    * @property string $position_id
    * @property string $with_team_id
    * @property string $name
    * @property string $responsibility
    * @property string $scope_id
    *
    * The followings are the available model relations:
            * @property Scope $scope
            * @property Position $position
            * @property Tasks[] $tasks
    */
class Duties extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'duties';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('position_id, name, responsibility, scope_id', 'required'),
                    array('position_id, with_team_id, scope_id', 'length', 'max'=>21),
                    array('name, responsibility', 'length', 'max'=>256),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, position_id, with_team_id, name, responsibility, scope_id', 'safe', 'on'=>'search'),
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
            'scope' => array(self::BELONGS_TO, 'Scope', 'scope_id'),
            'position' => array(self::BELONGS_TO, 'Position', 'position_id'),
            'tasks' => array(self::HAS_MANY, 'Tasks', 'duties_id'),
        );
    }

    /**
    * @return array customized attribute labels (name=>label)
    */
    public function attributeLabels()
    {
    return array(
            'id' => Yii::t('site','ID'),
            'position_id' => Yii::t('site','Position'),
            'with_team_id' => Yii::t('site','With Team'),
            'name' => Yii::t('site','Name'),
            'responsibility' => Yii::t('site','Responsibility'),
            'scope_id' => Yii::t('site','Scope'),
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
		$criteria->compare('with_team_id',$this->with_team_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('responsibility',$this->responsibility,true);
		$criteria->compare('scope_id',$this->scope_id,true);

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
    * @return Duties the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
