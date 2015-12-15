<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Maruti Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>/maruti-login.css" />
        <script src="<?php echo JS_URL; ?>/jquery.min.js"></script>  
        <script src="<?php echo JS_URL; ?>/maruti.login.js"></script> 
        <script src="<?php echo JS_URL; ?>/admin.js"></script> 
        <script type="text/javascript">
            $(function() {
                Basic.path =<?php echo "'".SITE_ULR."'"; ?>;
            });
            document.onkeydown = function(event) {
                var e = event || window.event || arguments.callee.caller.arguments[0];
                if (e && e.keyCode == 13) { // enter 键
                    Login.mySubmit();
                }
            };
        </script>
    </head>
    <body>
        <div id="logo">
            <img src="<?php echo IMG_URL; ?>/login-logo.png" alt="" />
        </div>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="#" method="post">
                <div class="control-group normal_text"><h3>后台登陆</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input type="text" placeholder="Username" id='username' />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            <input type="password" placeholder="Password" id='userpassword'/>
                        </div>
                    </div>
                </div>
                <div style='text-align:center;' id='login_error'></div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-warning" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="button" class="btn btn-success" value="Login" onclick='Login.mySubmit()'/></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Enter your e-mail address below and we will send you instructions <br/><font color="#FF6633">how to recover a password.</font></p>

                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                    </div>
                </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-warning" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-info" value="Recover" /></span>
                </div>
            </form>
        </div>
    </body>

</html>
