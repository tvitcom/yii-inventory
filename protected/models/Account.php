<?php

/**
 * This is the model class for table "accounts".
 *
 * The followings are the available columns in table 'accounts':
 * @property string $id
 * @property string $position_id
 * @property string $software_id
 * @property string $login
 * @property string $pasword
 * @property string $digi_certs
 * @property string $restore_phone
 * @property string $restore_email
 * @property string $restore_responce
 * @property string $uri_addr
 * @property string $last_update
 *
 * The followings are the available model relations:
 * @property Position $position
 * @property Software $software
 */
class Account extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'accounts';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('position_id, software_id', 'required'),
            array('position_id, software_id', 'length', 'max' => 21),
            array('login, restore_email', 'length', 'max' => 45),
            array('pasword, restore_responce', 'length', 'max' => 2048),
            array('restore_phone', 'length', 'max' => 14),
            array('uri_addr', 'length', 'max' => 128),
            array('digi_certs, last_update', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, position_id, software_id, login, pasword, digi_certs, restore_phone, restore_email, restore_responce, uri_addr, last_update', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'position' => array(self::BELONGS_TO, 'Position', 'position_id'),
            'software' => array(self::BELONGS_TO, 'Software', 'software_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => Yii::t('site', 'ID'),
            'position_id' => Yii::t('site', 'Position'),
            'software_id' => Yii::t('site', 'Software'),
            'login' => Yii::t('site', 'Login name'),
            'pasword' => Yii::t('site', 'Pasword'),
            'digi_certs' => Yii::t('site', 'Digi Certs'),
            'restore_phone' => Yii::t('site', 'Restore Phone'),
            'restore_email' => Yii::t('site', 'Restore Email'),
            'restore_responce' => Yii::t('site', 'Restore Responce'),
            'uri_addr' => Yii::t('site', 'URI'),
            'last_update' => Yii::t('site', 'Last Update'),
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('position_id', $this->position_id, true);
        $criteria->compare('software_id', $this->software_id, true);
        $criteria->compare('login', $this->login, true);
        $criteria->compare('pasword', $this->pasword, true);
        $criteria->compare('digi_certs', $this->digi_certs, true);
        $criteria->compare('restore_phone', $this->restore_phone, true);
        $criteria->compare('restore_email', $this->restore_email, true);
        $criteria->compare('restore_responce', $this->restore_responce, true);
        $criteria->compare('uri_addr', $this->uri_addr, true);
        $criteria->compare('last_update', $this->last_update, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 100,
            ),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Account the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * Realization cryptoprocessors:
      public function beforeSave() {

      Yii::app()->getSecurityManager()->setEncryptionKey('PrivateInfoEncryptionKey');
      $this->pasword = base64_encode(Yii::app()->getSecurityManager()->encrypt($this->pasword));

      Yii::app()->getSecurityManager()->setEncryptionKey('SensitiveDataEncryptionKey');
      $this->sensitive_data = utf8_encode(Yii::app()->getSecurityManager()->encrypt($this->sensitive_data));
      return parent::beforeSave();
      }
     */
}
