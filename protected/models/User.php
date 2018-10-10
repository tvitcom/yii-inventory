<?php

/**
* This is the model class for table "user".
*
* The followings are the available columns in table 'user':
    * @property string $id
    * @property string $person_id
    * @property string $company_id
    * @property string $title
    * @property string $login
    * @property string $pass_hash
    * @property string $pass_reset_token
    * @property string $email
    * @property string $ava_link
    * @property string $t_lastlogin
    * @property string $t_registered
    * @property string $auth_key
    * @property string $current_session_id
    * @property integer $is_active
    *
    * The followings are the available model relations:
            * @property Company $company
            * @property Person $person
    */
class User extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'user';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('person_id, company_id, title, is_active', 'required'),
                    array('is_active', 'numerical', 'integerOnly'=>true),
                    array('person_id, company_id, login', 'length', 'max'=>21),
                    array('title', 'length', 'max'=>45),
                    array('pass_hash, pass_reset_token, email, current_session_id', 'length', 'max'=>64),
                    array('ava_link', 'length', 'max'=>256),
                    array('auth_key', 'length', 'max'=>128),
                    array('t_lastlogin, t_registered', 'safe'),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, person_id, company_id, title, login, pass_hash, pass_reset_token, email, ava_link, t_lastlogin, t_registered, auth_key, current_session_id, is_active', 'safe', 'on'=>'search'),
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
            'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
            'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
        );
    }

    /**
    * @return array customized attribute labels (name=>label)
    */
    public function attributeLabels()
    {
    return array(
            'id' => Yii::t('site','ID'),
            'person_id' => Yii::t('site','Person'),
            'company_id' => Yii::t('site','Company'),
            'title' => Yii::t('site','Title'),
            'login' => Yii::t('site','Login'),
            'pass_hash' => Yii::t('site','Pass Hash'),
            'pass_reset_token' => Yii::t('site','Pass Reset Token'),
            'email' => Yii::t('site','Email'),
            'ava_link' => Yii::t('site','Ava Link'),
            't_lastlogin' => Yii::t('site','T Lastlogin'),
            't_registered' => Yii::t('site','T Registered'),
            'auth_key' => Yii::t('site','Auth Key'),
            'current_session_id' => Yii::t('site','Current Session'),
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
		$criteria->compare('person_id',$this->person_id,true);
		$criteria->compare('company_id',$this->company_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('pass_hash',$this->pass_hash,true);
		$criteria->compare('pass_reset_token',$this->pass_reset_token,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ava_link',$this->ava_link,true);
		$criteria->compare('t_lastlogin',$this->t_lastlogin,true);
		$criteria->compare('t_registered',$this->t_registered,true);
		$criteria->compare('auth_key',$this->auth_key,true);
		$criteria->compare('current_session_id',$this->current_session_id,true);
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
    * @return User the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
