<!DOCTYPE html>
<html lang="en" class="app">
<head>  
<?php require 'head.php';?>
</head>
<body class="">
  <section class="vbox">
      <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-info dk">
    <?php require 'header.php';?>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php require 'aside.php';?>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox" id="bjax-el">
            <section class="scrollable padder-lg">
              <h2 class="font-thin m-b">Video</h2>
              <div class="row row-sm">
                  
                  
                <div class="col-xs-12 col-sm-4">
                  <div class="item">
                    <div class="pos-rlt">
                      <div class="item-overlay opacity r r-2x bg-black">
                        <div class="center text-center m-t-n">
                          <a href="/index.php?r=site/video_detail"><i class="fa fa-play-circle i-2x"></i></a>
                        </div>
                      </div>
                      <div class="top">
                        <span class="badge bg-dark m-l-sm m-t-sm">03:20</span>
                      </div>
                      <a href="/index.php?r=site/video_detail"><img src="<?PHP echo IMG_URL;?>m40.jpg" alt="" class="r r-2x img-full"></a>
                    </div>
                    <div class="padder-v">
                      <a href="/index.php?r=site/video_detail" class="text-ellipsis">Tempered Song</a>
                      <a href="/index.php?r=site/video_detail" class="text-ellipsis text-xs text-muted">Miaow</a>
                    </div>
                  </div>
                </div>
                  
                
              </div>
              <h3 class="font-thin m-b">Video List</h3>
              <div class="row row-sm">
                  
                  
                  
                <div class="col-xs-6 col-sm-4 col-md-3">
                  <div class="item">
                    <div class="pos-rlt">
                      <div class="item-overlay opacity r r-2x bg-black">
                        <div class="center text-center m-t-n">
                          <a href="/index.php?r=site/video_detail"><i class="fa fa-play-circle i-2x"></i></a>
                        </div>
                      </div>
                      <a href="/index.php?r=site/video_detail"><img src="<?PHP echo IMG_URL;?>m40.jpg" alt="" class="r r-2x img-full"></a>
                    </div>
                    <div class="padder-v">
                      <a href="/index.php?r=site/video_detail" class="text-ellipsis">Tempered Song</a>
                      <a href="/index.php?r=site/video_detail" class="text-ellipsis text-xs text-muted">Miaow</a>
                    </div>
                  </div>
                </div>
        
                  
              </div>
              <!-- 分页类 -->
              <ul class="pagination pagination">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
              </ul>
              
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>    
  </section>
    
</body>
</html>