<?php

/**
* This is the model class for table "company".
*
* The followings are the available columns in table 'company':
    * @property string $id
    * @property string $name
    * @property string $short_name
    * @property string $company_site
    * @property string $digi_certs
    *
    * The followings are the available model relations:
            * @property Employee[] $employees
            * @property Location[] $locations
            * @property Software[] $softwares
            * @property User[] $users
    */
class Company extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'company';
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
                    array('name, short_name, company_site', 'length', 'max'=>45),
                    array('digi_certs', 'safe'),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, name, short_name, company_site, digi_certs', 'safe', 'on'=>'search'),
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
            'employees' => array(self::HAS_MANY, 'Employee', 'company_id'),
            'locations' => array(self::HAS_MANY, 'Location', 'company_id'),
            'softwares' => array(self::HAS_MANY, 'Software', 'company_id'),
            'users' => array(self::HAS_MANY, 'User', 'company_id'),
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
            'short_name' => Yii::t('site','Short Name'),
            'company_site' => Yii::t('site','Company Site'),
            'digi_certs' => Yii::t('site','string for encrypt here accounts'),
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
		$criteria->compare('short_name',$this->short_name,true);
		$criteria->compare('company_site',$this->company_site,true);
		$criteria->compare('digi_certs',$this->digi_certs,true);

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
    * @return Company the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
