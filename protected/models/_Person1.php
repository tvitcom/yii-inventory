<?php

/**
* This is the model class for table "person".
*
* The followings are the available columns in table 'person':
    * @property string $id
    * @property string $name
    * @property string $fullname
    * @property string $t_bitrhday
    * @property string $ident_code
    * @property string $passport_data
    * @property string $address_data
    * @property string $photo_link
    * @property string $contact_data
    * @property integer $is_enterpreneur
    *
    * The followings are the available model relations:
            * @property Employee[] $employees
            * @property User[] $users
    */
class Person extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'person';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('name', 'required'),
                    array('is_enterpreneur', 'numerical', 'integerOnly'=>true),
                    array('name', 'length', 'max'=>45),
                    array('fullname', 'length', 'max'=>65),
                    array('ident_code', 'length', 'max'=>18),
                    array('passport_data, photo_link', 'length', 'max'=>512),
                    array('address_data', 'length', 'max'=>256),
                    array('contact_data', 'length', 'max'=>128),
                    array('t_bitrhday', 'safe'),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, name, fullname, t_bitrhday, ident_code, passport_data, address_data, photo_link, contact_data, is_enterpreneur', 'safe', 'on'=>'search'),
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
            'employees' => array(self::HAS_MANY, 'Employee', 'person_id'),
            'users' => array(self::HAS_MANY, 'User', 'person_id'),
        );
    }

    /**
    * @return array customized attribute labels (name=>label)
    */
    public function attributeLabels()
    {
    return array(
            'id' => Yii::t('site','ID'),
            'name' => Yii::t('site','Name'),
            'fullname' => Yii::t('site','Fullname'),
            't_bitrhday' => Yii::t('site','T Bitrhday'),
            'ident_code' => Yii::t('site','id or other goverment identification number
'),
            'passport_data' => Yii::t('site','Passport Data'),
            'address_data' => Yii::t('site','Address Data'),
            'photo_link' => Yii::t('site','Photo Link'),
            'contact_data' => Yii::t('site','Contact Data'),
            'is_enterpreneur' => Yii::t('site','Is Enterpreneur'),
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('t_bitrhday',$this->t_bitrhday,true);
		$criteria->compare('ident_code',$this->ident_code,true);
		$criteria->compare('passport_data',$this->passport_data,true);
		$criteria->compare('address_data',$this->address_data,true);
		$criteria->compare('photo_link',$this->photo_link,true);
		$criteria->compare('contact_data',$this->contact_data,true);
		$criteria->compare('is_enterpreneur',$this->is_enterpreneur);

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
    * @return Person the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
