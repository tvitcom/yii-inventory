<?php

/**
* This is the model class for table "scope".
*
* The followings are the available columns in table 'scope':
    * @property string $id
    * @property string $company_id
    * @property string $name
    *
    * The followings are the available model relations:
            * @property Duties[] $duties
            * @property Company $company
    */
class Scope extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'scope';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('company_id', 'required'),
                    array('company_id', 'length', 'max'=>21),
                    array('name', 'length', 'max'=>45),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, company_id, name', 'safe', 'on'=>'search'),
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
            'duties' => array(self::HAS_MANY, 'Duties', 'scope_id'),
            'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
        );
    }

    /**
    * @return array customized attribute labels (name=>label)
    */
    public function attributeLabels()
    {
    return array(
            'id' => Yii::t('site','ID'),
            'company_id' => Yii::t('site','Company'),
            'name' => Yii::t('site','Name'),
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
		$criteria->compare('company_id',$this->company_id,true);
		$criteria->compare('name',$this->name,true);

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
    * @return Scope the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
