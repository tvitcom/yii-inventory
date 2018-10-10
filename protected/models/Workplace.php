<?php

/**
 * This is the model class for table "workplace".
 *
 * The followings are the available columns in table 'workplace':
 * @property string $id
 * @property string $emplacement_id
 * @property integer $work_num
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Units[] $units
 * @property Emplacement $emplacement
 */
class Workplace extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'workplace';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('emplacement_id, work_num', 'required'),
            array('work_num', 'numerical', 'integerOnly' => true),
            array('emplacement_id', 'length', 'max' => 21),
            array('description', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, emplacement_id, work_num, description', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'units' => array(self::HAS_MANY, 'Units', 'workplace_id'),
            'emplacement' => array(self::BELONGS_TO, 'Emplacement', 'emplacement_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => Yii::t('site', 'ID'),
            'emplacement_id' => Yii::t('site', 'Emplacement'),
            'work_num' => Yii::t('site', 'Work Num'),
            'description' => Yii::t('site', 'Description'),
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
        $criteria->compare('emplacement_id', $this->emplacement_id, false);
        $criteria->compare('work_num', $this->work_num);
        $criteria->compare('description', $this->description, true);

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
     * @return Workplace the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * Return array workplaces for the emplacement_id
     */
    public function getOwnPlaces($emplacement_id) {
        $sql = "SELECT id, work_num FROM workplace WHERE emplacement_id =:emplacement_id";
        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        $command->bindParam(":emplacement_id", $emplacement_id, PDO::PARAM_INT);
        return $command->queryAll();
    }

}
