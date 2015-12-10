<!DOCTYPE html>
<html lang="en" class="app">
<head>  
<?php require 'head.php';?>
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-primary nav-xs">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="icon-list"></i>
        </a>
        <a href="index.html" class="navbar-brand text-lt">
          <i class="icon-earphones"></i>
          <img src="<?PHP echo IMG_URL;?>logo.png" alt="." class="hide">
          <span class="hidden-nav-xs m-l-sm">Musik</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="icon-settings"></i>
        </a>
      </div>      <ul class="nav navbar-nav hidden-xs">
        <li>
          <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
            <i class="fa fa-indent text"></i>
            <i class="fa fa-dedent text-active"></i>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
          </div>
        </div>
      </form>
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
          <li class="hidden-xs">
            <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="badge badge-sm up bg-danger count">2</span>
            </a>
            <section class="dropdown-menu aside-xl animated fadeInUp">
              <section class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span class="count">2</span> notifications</strong>
                </div>
                <div class="list-group list-group-alt">
                  <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="<?PHP echo IMG_URL;?>a0.png" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href="#" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </section>
            </section>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="<?PHP echo IMG_URL;?>a0.png" alt="...">
              </span>
              John.Smith <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">            
              <li>
                <span class="arrow top"></span>
                <a href="#">Settings</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="#">
                  <span class="badge bg-danger pull-right">3</span>
                  Notifications
                </a>
              </li>
              <li>
                <a href="docs.html">Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php require 'aside.php';?>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
          <section class="scrollable">
            <div id="masonry" class="pos-rlt animated fadeInUpBig">
              <div class="item">
                <div class="carousel slide auto" data-interval="3000">
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="item-overlay opacity animated fadeInDown wrapper bg-info">
                        <p class="text-white">N.01</p>
                        <div class="center text-center m-t-n">
                          <a href="#"><i class="icon-control-play i-2x"></i></a>
                        </div>
                      </div>
                      <div class="bottom wrapper bg-info gd">
                        <div class="m-t m-b"><a href="#" class="b-b b-danger h2 text-u-c text-lt font-bold">Teideal</a></div>
                        <p class="hidden-xs">Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula</p>
                      </div>
                      <a href="#"><img src="<?PHP echo IMG_URL;?>m20.jpg" alt="" class="img-full"></a>
                    </div>
                    <div class="item">
                      <div class="item-overlay opacity animated fadeInDown wrapper bg-info">
                        <p class="text-white">N.02</p>
                        <div class="center text-center m-t-n">
                          <a href="#"><i class="icon-control-play i-2x"></i></a>
                        </div>
                      </div>
                      <div class="bottom wrapper bg-info gd">
                        <div class="m-t m-b"><a href="#" class="b-b b-warning h2 text-u-c text-lt font-bold">Tincidunt</a></div>
                        <p class="hidden-xs">Gestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae ligula elementum</p>
                      </div>
                      <a href="#"><img src="<?PHP echo IMG_URL;?>m22.jpg" alt="" class="img-full"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-overlay gd animated fadeInUp wrapper bg-info">
                  <p class="text-white">Watch later</p>
                  <div class="center text-center m-t-n">
                    <a href="#"><i class="icon-control-play i-2x"></i></a>
                  </div>
                </div>
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Tincidunt</a></div>
                  <p class="hidden-xs">Vivamus vel tincidunt libero, lementum ligula vitae</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m31.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-warning h4 text-u-c text-lt font-bold">Duis</a></div>
                  <p class="hidden-xs">Tincidunt libero vitae elementum</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m10.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="item-overlay active bg-primary dker wrapper text-center">
                  <div class="m-t m-b"><a href="#" class="b-b b-white h4 text-u-c text-lt font-bold">lementum</a></div>
                  <p class="hidden-xs">lementum ligula vitae est quis congue ero</p>
                </div>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Diam</a></div>
                  <p class="hidden-xs">Con malesuada est, quis congue nibhs</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m4.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="carousel carousel-fade bg-info slide auto" data-interval="6000">
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="item-overlay active dker wrapper text-center">
                        <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Cosies</a></div>
                        <p class="hidden-xs">Duis non malesuada est, quis congue nibh</p>
                      </div>
                      <a href="#"><img src="<?PHP echo IMG_URL;?>m4.jpg" alt="" class="img-full"></a>
                    </div>
                    <div class="item">
                      <div class="item-overlay active dk wrapper text-center">
                        <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Malesuada</a></div>
                        <p class="hidden-xs">Aliquam sollicitudin venenatis congue nibh</p>
                      </div>
                      <a href="#"><img src="<?PHP echo IMG_URL;?>m4.jpg" alt="" class="img-full"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Vivamus</a></div>
                  <p class="hidden-xs">Morbi id neque quam. Aliquam sollicitudin venenatis ipsum</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m13.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-warning h4 text-u-c text-lt font-bold">Libero</a></div>
                  <p class="hidden-xs">Aliquam sollicitudin venenatis ipsum</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m30.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">habitant</a></div>
                  <p class="hidden-xs">Vel tincidunt libero, vitae ligula tristique</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m19.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="item-overlay active bg-success dker wrapper text-center">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Ligula</a></div>
                  <p class="hidden-xs">Sesuada est, quis congue tincidunt libero nibh ligula</p>
                </div>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Malesuada</a></div>
                  <p class="hidden-xs">Pellentesque habitant morbi tristique sodales</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m7.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Donec</a></div>
                  <p class="hidden-xs">Vestibulum ullamcorper</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m18.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-primary h4 text-u-c text-lt font-bold">Eleifend</a></div>
                  <p class="hidden-xs">Malesuada augue. Donec eleifend condimentum</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m32.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Sollicitudin </a></div>
                  <p class="hidden-xs">Mauris convallis mauris at pellentesque volutpat</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m40.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-warning h2 text-u-c text-lt font-bold">Senectus </a></div>
                  <p class="hidden-xs">Fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m21.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Phasellus</a></div>
                  <p class="hidden-xs">Senectus et netus et malesuada fames</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m5.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-white h4 text-u-c text-lt font-bold">Neque</a></div>
                  <p class="hidden-xs">Consectetur adipiscing elit. Morbi id neque quam</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>a10.png" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Nisi ne</a></div>
                  <p class="hidden-xs">Orbi tristique senectus et netus et malesuada</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m4.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="item-overlay active bg-warning dker wrapper text-center">
                  <div class="m-t m-b"><a href="#" class="b-b b-white h4 text-u-c text-lt font-bold">Morbi</a></div>
                  <p class="hidden-xs">Dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Congue</a></div>
                  <p class="hidden-xs">Malesuada est, quis congue nibh</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m6.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="item-overlay active bg-info lt wrapper text-center">
                  <div class="m-t m-b"><a href="#" class="b-b b-white h4 text-u-c text-lt font-bold">Csesoi</a></div>
                  <p class="hidden-xs">Dolor sit ectetur elit senectus et malesuada</p>
                </div>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Consectetur</a></div>
                  <p class="hidden-xs">Adipiscing elit senectus et netus mal.</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m42.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Morbi</a></div>
                  <p class="hidden-xs">Dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m9.jpg" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Soesle</a></div>
                  <p class="hidden-xs">Adipiscing elituis congue</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>a7.png" alt="" class="img-full"></a>
              </div>
              <div class="item">
                <div class="bottom gd bg-info wrapper">
                  <div class="m-t m-b"><a href="#" class="b-b b-info h4 text-u-c text-lt font-bold">Congue</a></div>
                  <p class="hidden-xs">Malesuada est, congue nibh quis elituis</p>
                </div>
                <a href="#"><img src="<?PHP echo IMG_URL;?>m12.jpg" alt="" class="img-full"></a>
              </div>
            </div>
          </section>
        </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>    
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>  
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/masonry/tiles.min.js"></script>
  <script src="js/masonry/demo.js"></script>
  <script src="js/app.plugin.js"></script>
  <script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/demo.js"></script>
</body>
</html>