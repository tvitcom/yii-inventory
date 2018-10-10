<?php

/**
 * This is the model class for table "emplacement".
 *
 * The followings are the available columns in table 'emplacement':
 * @property string $id
 * @property string $location_id
 * @property string $office_num
 * @property string $name
 * @property string $map_coords
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property Position[] $positions
 * @property Units[] $units
 */
class Emplacement extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'emplacement';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('location_id, name', 'required'),
            array('location_id', 'length', 'max' => 21),
            array('office_num', 'length', 'max' => 5),
            array('name', 'length', 'max' => 45),
            array('map_coords', 'length', 'max' => 64),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, location_id, office_num, name, map_coords', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
            'positions' => array(self::HAS_MANY, 'Position', 'emplacement_id'),
            'units' => array(self::HAS_MANY, 'Units', 'emplacement_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => Yii::t('site', 'ID'),
            'location_id' => Yii::t('site', 'Location'),
            'office_num' => Yii::t('site', 'Office Num'),
            'name' => Yii::t('site', 'Office #'),
            'map_coords' => Yii::t('site', 'Map Coords'),
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
        $criteria->compare('location_id', $this->location_id, true);
        $criteria->compare('office_num', $this->office_num, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('map_coords', $this->map_coords, true);

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
     * @return Emplacement the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
