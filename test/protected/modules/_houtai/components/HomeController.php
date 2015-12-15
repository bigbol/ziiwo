<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
require_once 'Pagination.php';

class HomeController extends CController {

    public function __construct($id, $module = null) {
        parent::__construct($id, $module);
        self::judgeIsLogin();
    }

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/admin'; //布局文件
    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    //判断是否登陆
    public static function judgeIsLogin() {
        if (!isset(Yii::app()->session['admin_user']) || Yii::app()->session['admin_user'] == null) {
            echo "<script>window.location.href='" . SITE_ULR . "index.php?r=login'</script>";
        }
    }

}