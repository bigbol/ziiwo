
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Maruti Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/fullcalendar.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/maruti-style.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/maruti-media.css" class="skin-color" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/colorpicker.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/datepicker.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/uniform.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/select2.css" />
        <script src="<?php echo JS_URL; ?>/jquery.min.js"></script>
        <script src="<?php echo JS_URL; ?>/jquery.ui.custom.js"></script>
        <script src="<?php echo JS_URL; ?>/bootstrap.min.js"></script>
        <script src="<?php echo JS_URL; ?>/select2.min.js"></script>
        <script src="<?php echo JS_URL; ?>/admin.js"></script> 
        <script src="<?php echo JS_URL; ?>/highcharts.js"></script>
    </body>
    <script type="text/javascript">
        $(function() {
            Basic.path =<?php echo "'" . SITE_ULR . "'"; ?>;
        });
    </script>
</head>
<body>
    <!--Header-part-->
    <div id="header">
        <h1><a href="dashboard.html">Maruti Admin</a></h1>
    </div>
    <!--close-Header-part--> 
    <!--top-Header-messaages-->
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
    <!--close-top-Header-messaages--> 
    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text"><?php echo Yii::app()->session['admin_user']['username'] ?></span></a></li>
            <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="#">new message</a></li>
                    <li><a class="sInbox" title="" href="#">inbox</a></li>
                    <li><a class="sOutbox" title="" href="#">outbox</a></li>
                    <li><a class="sTrash" title="" href="#">trash</a></li>
                </ul>
            </li>
            <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
            <li class=""><a title="" href="./index.php?r=login/Logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
        </ul>
    </div>
    <!--close-top-Header-menu-->
    <div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th-list"></i> Tables</a>
        <ul>
            <li class="active"><a href="./index.php"><i class="icon icon-home"></i> <span>统计</span></a></li>
            <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
            <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
            <li><a href="./index.php?r=area"><i class="icon icon-th"></i> <span>测试地区管理</span></a></li>
            <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
            <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>系统管理</span> <span class="label">3</span></a>
                <ul>
                    <li><a href="./index.php?r=user/index">用户管理</a></li>
                    <li><a href="form-validation.html">Form with Validation</a></li>
                    <li><a href="form-wizard.html">Form with Wizard</a></li>
                </ul>
            </li>
            <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
            <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
            <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label">3</span></a>
                <ul>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="chat.html">Chat option</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <?php echo $content; ?>
    <div class="row-fluid">
        <div id="footer" class="span12"> 2012 &copy; Marutii Admin. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> </div>
    </div>
</body>
</html>
