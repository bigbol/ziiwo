<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author Administrator
 */
class UserController extends HomeController {

    public $userModel = null;

    public function __construct($id, $module = null) {
        parent::__construct($id, $module);
        $this->userModel = User::model();
    }

    public function actionIndex() {
        $where = '1';
        $limit = 10;
        $criteria = new CDbCriteria;
        $criteria->select = '*';
        $count = $this->userModel->count($where);
        $page = new Pagination($count, $limit);
        $criteria->limit = $limit;
        $criteria->offset = $page->limit;
        $criteria->order = 'userid DESC';
        $list = $this->userModel->findAll($criteria);
        $page_list = $page->fpage();
        $this->render('index', array('userList' => $list, 'page_list' => $page_list));
    }

    //form表单
    public function actionForm() {
        $model = new User();
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save()) {
                $this->redirect('./index.php?r=user');
            } else {
                $model->getErrors();
            }
        }
        $this->render('form', array('model' => $model));
    }

    protected function beforeSave() {             //在保存之前执行的方法 
        if ($this->isNewRecord) {                 //当有一条新纪录的时候
            $_POST['User'] = md5($_POST['User']['userpassword']);
        }
        return true;
    }

    //删除
    public function actionDelUser() {
        $ret = 0;
        $msg = '';
        $id = intval($_POST['id']);
        if ($id) {
            $user_info = $this->userModel->findByPk($id);
            if ($user_info->delete()) {
                $ret = 1;
            } else {
                $msg = '删除失败';
            }
        } else {
            $msg = '参数错误';
        }
        echo json_encode(array('ret' => $ret, 'msg' => $msg));
        die();
    }

}

?>
