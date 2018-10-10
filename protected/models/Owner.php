<?php

/**
* This is the model class for table "owner".
*
* The followings are the available columns in table 'owner':
    * @property string $id
    * @property string $owner_id
    * @property string $person_id
    * @property string $description
    * @property string $type_owning
    *
    * The followings are the available model relations:
            * @property Company[] $companies
            * @property Person $person
            * @property User[] $users
    */
class Owner extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'owner';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('person_id', 'required'),
                    array('owner_id, person_id', 'length', 'max'=>21),
                    array('description', 'length', 'max'=>64),
                    array('type_owning', 'length', 'max'=>45),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, owner_id, person_id, description, type_owning', 'safe', 'on'=>'search'),
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
            'companies' => array(self::HAS_MANY, 'Company', 'owner_id'),
            'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
            'users' => array(self::HAS_MANY, 'User', 'owner_id'),
        );
    }

    /**
    * @return array customized attribute labels (name=>label)
    */
    public function attributeLabels()
    {
    return array(
            'id' => Yii::t('site','ID'),
            'owner_id' => Yii::t('site','If group id - that company is team direction'),
            'person_id' => Yii::t('site','Person'),
            'description' => Yii::t('site','Description'),
            'type_owning' => Yii::t('site','Type Owning'),
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
		$criteria->compare('owner_id',$this->owner_id,true);
		$criteria->compare('person_id',$this->person_id,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type_owning',$this->type_owning,true);

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
    * @return Owner the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
