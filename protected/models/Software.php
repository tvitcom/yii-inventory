<?php

/**
* This is the model class for table "software".
*
* The followings are the available columns in table 'software':
    * @property string $id
    * @property string $company_id
    * @property string $name
    * @property string $upload_link
    * @property string $work_platform
    * @property string $license_type
    * @property string $license_text
    * @property string $our_license_key
    * @property string $t_start
    * @property string $t_end
    * @property integer $is_licensed
    *
    * The followings are the available model relations:
            * @property Accounts[] $accounts
            * @property Company $company
    */
class Software extends CActiveRecord
{
    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return 'software';
    }

    /**
    * @return array validation rules for model attributes.
    */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                    array('company_id, name, license_type', 'required'),
                    array('is_licensed', 'numerical', 'integerOnly'=>true),
                    array('company_id', 'length', 'max'=>21),
                    array('name', 'length', 'max'=>45),
                    array('upload_link', 'length', 'max'=>1024),
                    array('work_platform', 'length', 'max'=>11),
                    array('license_type', 'length', 'max'=>35),
                    array('license_text, our_license_key, t_start, t_end', 'safe'),
                // The following rule is used by search().
        // @todo Please remove those attributes that should not be searched.
        array('id, company_id, name, upload_link, work_platform, license_type, license_text, our_license_key, t_start, t_end, is_licensed', 'safe', 'on'=>'search'),
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
            'accounts' => array(self::HAS_MANY, 'Accounts', 'software_id'),
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
            'upload_link' => Yii::t('site','Upload Link'),
            'work_platform' => Yii::t('site','Work Platform'),
            'license_type' => Yii::t('site','License Type'),
            'license_text' => Yii::t('site','License Text'),
            'our_license_key' => Yii::t('site','Our License Key'),
            't_start' => Yii::t('site','T Start'),
            't_end' => Yii::t('site','T End'),
            'is_licensed' => Yii::t('site','Is Licensed'),
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
		$criteria->compare('upload_link',$this->upload_link,true);
		$criteria->compare('work_platform',$this->work_platform,true);
		$criteria->compare('license_type',$this->license_type,true);
		$criteria->compare('license_text',$this->license_text,true);
		$criteria->compare('our_license_key',$this->our_license_key,true);
		$criteria->compare('t_start',$this->t_start,true);
		$criteria->compare('t_end',$this->t_end,true);
		$criteria->compare('is_licensed',$this->is_licensed);

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
    * @return Software the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
