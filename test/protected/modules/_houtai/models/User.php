<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $userid
 * @property string $username
 * @property string $useremail
 * @property string $userpassword
 * @property integer $usercoin
 * @property string $userregip
 * @property string $photo
 */
class User extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{user}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, useremail, userpassword,photo', 'required'),
            array('username', 'match', 'pattern' => '/^[0-9a-zA-Z_]+$/', 'message' => '用户名格式不正确'),
            array('useremail', 'email', 'allowEmpty' => false, 'message' => '邮箱格式不正确'),
            array('photo', 'match', 'pattern' => '/^1\d{10}$/', 'message' => '电话格式不正确'),
            array('username, useremail', 'length', 'max' => 60),
            array('userpassword', 'length', 'max' => 32),
            array('photo', 'length', 'max' => 120),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('userid, username, useremail, userpassword, photo', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'userid' => '用户id',
            'username' => '用户名',
            'useremail' => 'Email',
            'userpassword' => '密码',
            'photo' => '手机',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('userid', $this->userid);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('useremail', $this->useremail, true);
        $criteria->compare('userpassword', $this->userpassword, true);
        $criteria->compare('photo', $this->photo, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

}