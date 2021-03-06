<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <?php require 'head.php';?>
</head>
<body class="">
  <section class="vbox">
    <header class="bg-black lter header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-success nav-xs">
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
          <section class="w-f-md">
            <section class="hbox stretch bg-black dker">
              <!-- side content -->
              <aside class="col-sm-5 no-padder" id="sidebar">
                <section class="vbox animated fadeInUp">
                  <section class="scrollable">
                    <div class="m-t-n-xxs item pos-rlt">
                      <div class="top text-right">
                        <span class="musicbar animate bg-success bg-empty inline m-r-lg m-t" style="width:25px;height:30px">
                          <span class="bar1 a3 lter"></span>
                          <span class="bar2 a5 lt"></span>
                          <span class="bar3 a1 bg"></span>
                          <span class="bar4 a4 dk"></span>
                          <span class="bar5 a2 dker"></span>
                        </span>
                      </div>
                      <div class="bottom gd bg-info wrapper-lg">
                        <span class="pull-right text-sm">101,400 <br>Followers</span>
                        <span class="h2 font-thin">Soph Ashe</span>
                      </div>
                      <img class="img-full" src="<?PHP echo IMG_URL;?>m43.jpg" alt="...">
                    </div>
                    <ul class="list-group list-group-lg no-radius no-border no-bg m-t-n-xxs m-b-none auto">
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#" class="m-r-sm"><i class="icon-plus"></i></a>
                          <a href="#"><i class="icon-close"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>E.T.M</span>
                          <span class="text-muted"> -- 04:35</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Vestibulum id ligula porta</span>
                          <span class="text-muted"> -- 04:15</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Praesent commodo cursus magna</span>
                          <span class="text-muted"> -- 02:25</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Curabitur blandit tempus</span>
                          <span class="text-muted"> -- 05:00</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Faucibus dolor auctor</span>
                          <span class="text-muted"> -- 03:50</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Get lacinia odio sem nec elit cibus dolor auctor sed odio dui mollis ornare</span>
                          <span class="text-muted"> -- 04:05</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Faucibus dolor auctor</span>
                          <span class="text-muted"> -- 02:55</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Donec sed odio dui</span>
                          <span class="text-muted"> -- 04:35</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Urna mollis ornare vel eu leo</span>
                          <span class="text-muted"> -- 05:10</span>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
                          <a href="#"><i class="icon-plus"></i></a>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <div class="clear text-ellipsis">
                          <span>Vivamus sagittis lacus vel augue</span>
                          <span class="text-muted"> -- 02:35</span>
                        </div>
                      </li>
                    </ul>
                  </section>
                </section>
              </aside>
              <!-- / side content -->
              <section class="col-sm-4 no-padder bg">
                <section class="vbox">
                  <section class="scrollable hover">
                    <ul class="list-group list-group-lg no-bg auto m-b-none m-t-n-xxs">
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>m0.jpg" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Little Town</span>
                          <small class="text-muted">by Soph Ashe</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a1.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Get lacinia odio sem nec elit</span>
                          <small class="text-muted">by Filex</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a2.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Donec sed odio du</span>
                          <small class="text-muted">by Dan Doorack</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a3.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Curabitur blandit tempu</span>
                          <small class="text-muted">by Foxes</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a4.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Urna mollis ornare vel eu leo</span>
                          <small class="text-muted">by Chris Fox</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a5.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Faucibus dolor auctor</span>
                          <small class="text-muted">by Lauren Taylor</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a6.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Praesent commodo cursus magn</span>
                          <small class="text-muted">by Chris Fox</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a7.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Vestibulum id</span>
                          <small class="text-muted">by Milian</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a8.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Blandit tempu</span>
                          <small class="text-muted">by Amanda Conlan</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a9.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Vestibulum ullamcorpe quis malesuada augue mco rpe</span>
                          <small class="text-muted">by Dan Doorack</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a10.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Natis ipsum ac feugiat</span>
                          <small class="text-muted">by Hamburg</small>
                        </a>
                      </li>
                      <li class="list-group-item clearfix">
                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
                          <i class="icon-control-play text"></i>
                          <i class="icon-control-pause text-active"></i>
                        </a>
                        <a href="#" class="pull-left thumb-sm m-r">
                          <img src="<?PHP echo IMG_URL;?>a0.png" alt="...">
                        </a>
                        <a class="clear" href="#">
                          <span class="block text-ellipsis">Sec condimentum au</span>
                          <small class="text-muted">by Amanda Conlan</small>
                        </a>
                      </li>
                    </ul>
                  </section>
                </section>
              </section>
              <section class="col-sm-3 no-padder lt">
                <section class="vbox">
                  <section class="scrollable hover">
                    <div class="m-t-n-xxs">
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs">
                          <span class="block h3 font-bold text-info">Find</span>
                          <span class="text-muted">Search the music you like</span>
                          <span class="bottom wrapper-md block">- <i class="icon-arrow-right i-lg pull-right"></i></span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="<?PHP echo IMG_URL;?>m40.jpg" alt="...">
                        </a>
                      </div>
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs text-right">
                          <span class="block h3 font-bold text-warning text-u-c">Listen</span>
                          <span class="text-muted">Find the peace in your heart</span>
                          <span class="bottom wrapper-md block"><i class="icon-arrow-right i-lg pull-left"></i> -</span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="<?PHP echo IMG_URL;?>m41.jpg" alt="...">
                        </a>
                      </div>
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs">
                          <span class="block h3 font-bold text-success text-u-c">Share</span>
                          <span class="text-muted">Share the good songs with your loves</span>
                          <span class="bottom wrapper-md block">- <i class="icon-arrow-right i-lg pull-right"></i></span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="<?PHP echo IMG_URL;?>m42.jpg" alt="...">
                        </a>
                      </div>
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs text-right">
                          <span class="block h3 font-bold text-white text-u-c">2014</span>
                          <span class="text-muted">Find, Listen & Share</span>
                          <span class="bottom wrapper-md block"><i class="icon-arrow-right i-lg pull-left"></i> -</span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="<?PHP echo IMG_URL;?>m44.jpg" alt="...">
                        </a>
                      </div>
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs">
                          <span class="block h3 font-bold text-danger-lter text-u-c">Top10</span>
                          <span class="text-muted">Selected songs</span>
                          <span class="bottom wrapper-md block">- <i class="icon-arrow-right i-lg pull-right"></i></span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="<?PHP echo IMG_URL;?>m45.jpg" alt="...">
                        </a>
                      </div>
                    </div>
                  </section>
                </section>
              </section>
            </section>
          </section>
          <footer class="footer bg-success dker">
            <div id="jp_container_N">
                    <div class="jp-type-playlist">
                      <div id="jplayer_N" class="jp-jplayer hide"></div>
                      <div class="jp-gui">
                        <div class="jp-video-play hide">
                          <a class="jp-video-play-icon">play</a>
                        </div>
                        <div class="jp-interface">
                          <div class="jp-controls">
                            <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                            <div>
                              <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                              <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                            </div>
                            <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                            <div class="jp-progress hidden-xs">
                              <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg">
                                </div>
                                <div class="jp-title text-lt">
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm">
                              <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                              <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                            </div>
                            <div class="hidden-xs hidden-sm jp-volume">
                              <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                              </div>
                            </div>
                            <div>
                              <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                              <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                            </div>
                            <div>
                              <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                              <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                            </div>
                            <div class="hide">
                              <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                              <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jp-playlist dropup" id="playlist">
                        <ul class="dropdown-menu aside-xl dker">
                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                          <li class="list-group-item"></li>
                        </ul>
                      </div>
                      <div class="jp-no-solution hide">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                      </div>
                    </div>
                  </div>
          </footer>
        </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>    
  </section>
  <  <script src="<?PHP echo JS_URL;?>jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?PHP echo JS_URL;?>bootstrap.js"></script>
  <!-- App -->
  <script src="<?PHP echo JS_URL;?>app.js"></script>  
  <script src="<?PHP echo JS_URL;?>slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?PHP echo JS_URL;?>app.plugin.js"></script>
  <script type="text/javascript" src="<?PHP echo JS_URL;?>jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="<?PHP echo JS_URL;?>jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="<?PHP echo JS_URL;?>jPlayer/demo.js"></script>
</body>
</html>