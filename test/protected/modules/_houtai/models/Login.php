<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Login extends CFormModel {

    public $username;
    public $userpassword;
    public $rememberMe;
    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and userpassword are required,
     * and userpassword needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and userpassword are required
            array('username, userpassword', 'required','message'=>'用户名密码不能为空!'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
            // userpassword needs to be authenticated
            array('userpassword', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'rememberMe' => 'Remember me next time',
        );
    }

    /**
     * Authenticates the userpassword.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params) {
        if (!$this->hasErrors()) {
            $this->_identity = new UserIdentity($this->username, $this->userpassword);
            if (!$this->_identity->authenticate())
                $this->addError('userpassword', 'Incorrect username or userpassword.');
        }
    }

    /**
     * Logs in the user using the given username and userpassword in the model.
     * @return boolean whether login is successful
     */
    public function login() {
        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->username, $this->userpassword);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        }
        else
            return false;
    }

}
