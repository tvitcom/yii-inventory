<?php

/**
 * This is the model class for table "units".
 *
 * The followings are the available columns in table 'units':
 * @property string $id
 * @property string $utype_id
 * @property string $emplacement_id
 * @property string $workplace_id
 * @property string $name
 * @property string $serial_num
 * @property string $inventory_num
 * @property string $mac_addr
 * @property string $main_ipv4
 * @property string $main_ipv6
 * @property string $dt_purchase
 * @property string $dt_endwarranty
 * @property string $vendor_name
 * @property string $cost
 * @property string $documents
 * @property integer $is_broken
 * @property string $broken_description
 *
 * The followings are the available model relations:
 * @property Utype $utype
 * @property Workplace $workplace
 * @property Emplacement $emplacement
 */
class Unit extends CActiveRecord {

    // New related property for CGridView filter functionnality:
    public $workplace_num;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'units';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('utype_id, emplacement_id, workplace_id, name,inventory_num', 'required'),
            array('is_broken', 'numerical', 'integerOnly' => true),
            array('utype_id, emplacement_id, workplace_id', 'length', 'max' => 21),
            array('name, serial_num, mac_addr, vendor_name', 'length', 'max' => 45),
            array('inventory_num', 'length', 'max' => 10),
            array('main_ipv4', 'length', 'max' => 18),
            array('main_ipv6', 'length', 'max' => 39),
            array('cost', 'length', 'max' => 11),
            array('documents', 'length', 'max' => 51),
            array('broken_description', 'length', 'max' => 46),
            array('dt_purchase, dt_endwarranty', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, utype_id, emplacement_id, workplace_id, name, serial_num, inventory_num, mac_addr, main_ipv4, main_ipv6, dt_purchase, dt_endwarranty, vendor_name, cost, documents, is_broken, broken_description', 'safe', 'on' => 'search'),
            array('workplace_num', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'utype' => array(self::BELONGS_TO, 'Utype', 'utype_id'),
            'workplace' => array(self::BELONGS_TO, 'Workplace', 'workplace_id'),
            'emplacement' => array(self::BELONGS_TO, 'Emplacement', 'emplacement_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => Yii::t('site', 'ID'),
            'utype_id' => Yii::t('site', 'Utype'),
            'emplacement_id' => Yii::t('site', 'Emplacement'),
            'workplace_id' => Yii::t('site', 'Workplace'),
            'name' => Yii::t('site', 'Name'),
            'serial_num' => Yii::t('site', 's/n'),
            'inventory_num' => Yii::t('site', 'Inventory Num'),
            'mac_addr' => Yii::t('site', 'Mac Addr'),
            'main_ipv4' => Yii::t('site', 'IPv4'),
            'main_ipv6' => Yii::t('site', 'IPv6'),
            'dt_purchase' => Yii::t('site', 'Dt Purchase'),
            'dt_endwarranty' => Yii::t('site', 'Dt Endwarranty'),
            'vendor_name' => Yii::t('site', 'Vendor Name'),
            'cost' => Yii::t('site', 'Cost'),
            'documents' => Yii::t('site', 'Documents'),
            'is_broken' => Yii::t('site', 'Is Broken'),
            'broken_description' => Yii::t('site', 'Broken Description'),
            'workplace_num' => Yii::t('site', 'Workplace'),
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

        $criteria->compare('id', $this->id, false);
        $criteria->compare('utype_id', $this->utype_id, false);
        $criteria->together = true;
        $criteria->with = array('workplace');

        $criteria->compare('workplace.emplacement_id', $this->emplacement_id, false);

        if (isset($this->workplace_num)) {
            $criteria->compare('workplace.work_num', $this->workplace_num, false);
        }

        $criteria->compare('workplace_id', $this->workplace_id, false);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('serial_num', $this->serial_num, true);
        $criteria->compare('inventory_num', $this->inventory_num, true);
        $criteria->compare('mac_addr', $this->mac_addr, true);
        $criteria->compare('main_ipv4', $this->main_ipv4, true);
        $criteria->compare('main_ipv6', $this->main_ipv6, true);
        $criteria->compare('dt_purchase', $this->dt_purchase, true);
        $criteria->compare('dt_endwarranty', $this->dt_endwarranty, true);
        $criteria->compare('vendor_name', $this->vendor_name, true);
        $criteria->compare('cost', $this->cost, true);
        $criteria->compare('documents', $this->documents, true);
        $criteria->compare('is_broken', $this->is_broken);
        $criteria->compare('broken_description', $this->broken_description, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 50,
            ),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Unit the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
