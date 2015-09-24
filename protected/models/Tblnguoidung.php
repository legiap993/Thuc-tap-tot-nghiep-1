<?php

/**
 * This is the model class for table "tblnguoidung".
 *
 * The followings are the available columns in table 'tblnguoidung':
 * @property string $TenDN
 * @property integer $CapQuyen
 * @property string $MatKhau
 * @property string $Ten
 * @property string $DiaChi
 * @property string $SDT_ND
 */
class Tblnguoidung extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblnguoidung';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TenDN', 'required'),
			array('CapQuyen', 'numerical', 'integerOnly'=>true),
			array('TenDN', 'length', 'max'=>100),
			array('MatKhau', 'length', 'max'=>40),
			array('Ten', 'length', 'max'=>25),
			array('DiaChi', 'length', 'max'=>50),
			array('SDT_ND', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TenDN, CapQuyen, MatKhau, Ten, DiaChi, SDT_ND', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TenDN' => 'Ten Dn',
			'CapQuyen' => 'Cap Quyen',
			'MatKhau' => 'Mat Khau',
			'Ten' => 'Ten',
			'DiaChi' => 'Dia Chi',
			'SDT_ND' => 'Sdt Nd',
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

		$criteria->compare('TenDN',$this->TenDN,true);
		$criteria->compare('CapQuyen',$this->CapQuyen);
		$criteria->compare('MatKhau',$this->MatKhau,true);
		$criteria->compare('Ten',$this->Ten,true);
		$criteria->compare('DiaChi',$this->DiaChi,true);
		$criteria->compare('SDT_ND',$this->SDT_ND,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tblnguoidung the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
