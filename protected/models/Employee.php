<?php

/**
* This is the model class for table "employee".
*
* The followings are the available columns in table 'employee':
    * @property string $id
    * @property string $company_id
    * @property string $person_id
    * @property string $position_id
    * @property string $t_start
    * @property string $t_end
    * @property string $end_reason
    *
    * The followings are the available model relations:
            * @property Company $company
            * @property Person $person
            * @property Position $position
    */
class Employee extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'employee';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('company_id, person_id, position_id', 'required'),
                    array('company_id, person_id, position_id', 'length', 'max'=>21),
                    array('end_reason', 'length', 'max'=>128),
                    array('t_start, t_end', 'safe'),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, company_id, person_id, position_id, t_start, t_end, end_reason', 'safe', 'on'=>'search'),
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
            'position' => array(self::BELONGS_TO, 'Position', 'position_id'),
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
            'person_id' => Yii::t('site','Person'),
            'position_id' => Yii::t('site','Position'),
            't_start' => Yii::t('site','T Start'),
            't_end' => Yii::t('site','T End'),
            'end_reason' => Yii::t('site','End Reason'),
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
		$criteria->compare('person_id',$this->person_id,true);
		$criteria->compare('position_id',$this->position_id,true);
		$criteria->compare('t_start',$this->t_start,true);
		$criteria->compare('t_end',$this->t_end,true);
		$criteria->compare('end_reason',$this->end_reason,true);

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
    * @return Employee the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
