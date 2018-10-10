<?php

/**
* This is the model class for table "position".
*
* The followings are the available columns in table 'position':
    * @property string $id
    * @property string $emplacement_id
    * @property string $name
    * @property string $description
    * @property integer $is_manager
    *
    * The followings are the available model relations:
            * @property Accounts[] $accounts
            * @property Duties[] $duties
            * @property Employee[] $employees
            * @property Emplacement $emplacement
    */
class Position extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'position';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('emplacement_id, name', 'required'),
                    array('is_manager', 'numerical', 'integerOnly'=>true),
                    array('emplacement_id', 'length', 'max'=>21),
                    array('name', 'length', 'max'=>45),
                    array('description', 'length', 'max'=>96),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, emplacement_id, name, description, is_manager', 'safe', 'on'=>'search'),
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
            'accounts' => array(self::HAS_MANY, 'Accounts', 'position_id'),
            'duties' => array(self::HAS_MANY, 'Duties', 'position_id'),
            'employees' => array(self::HAS_MANY, 'Employee', 'position_id'),
            'emplacement' => array(self::BELONGS_TO, 'Emplacement', 'emplacement_id'),
        );
    }

    /**
    * @return array customized attribute labels (name=>label)
    */
    public function attributeLabels()
    {
    return array(
            'id' => Yii::t('site','ID'),
            'emplacement_id' => Yii::t('site','Emplacement'),
            'name' => Yii::t('site','Name'),
            'description' => Yii::t('site','Description'),
            'is_manager' => Yii::t('site','Is Manager'),
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
		$criteria->compare('emplacement_id',$this->emplacement_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('is_manager',$this->is_manager);

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
    * @return Position the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
