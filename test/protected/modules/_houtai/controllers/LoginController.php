<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Administrator
 */
class LoginController extends CController {

    //登陆首页
    public function actionIndex() {
        $this->render('index');
    }

    public function actionAjaxLogin() {
        $ret = 0;
        $msg = "";
        $user_mod = User::model();      //实例化Data数据模型
        $username = trim($_POST['username']);
        $password = trim($_POST['userpassword']);
        if ($username != "" && $password != "") {
            $_data = $user_mod->find('username=:name and userpassword=:passwork', array(':name' => $username, ':passwork' => $password));
            if (!empty($_data)) {
                $ret = 1;
                Yii::app()->session['admin_user'] = $_data;
            } else {
                $msg = "用户名或密码不存在!";
            }
        } else {
            $msg = "用户名或密码不能为空!";
        }
        echo json_encode(array('ret' => $ret, 'msg' => $msg));
        die();
    }

    /**
     * 退出
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->user->loginUrl);
    }

}

?>
