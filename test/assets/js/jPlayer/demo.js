$(document).ready(function(){

  var myPlaylist = new jPlayerPlaylist({
    jPlayer: "#jplayer_N",
    cssSelectorAncestor: "#jp_container_N"
  }, [
    {
      title:"FAIRYTAIL",
      artist:"ADG3",
      mp3:"<?php echo REMOTE ;?>/MUSIC/FAIRYTAIL.mp3",
      poster: "images/m0.jpg"
    },
    {
      title:"Busted Chump",
      artist:"3studios",
      mp3:"http://flatfull.com/themes/assets/musics/adg3com_bustedchump.mp3",
      poster: "images/m0.jpg"
    }
  ], {
    playlistOptions: {
      enableRemoveControls: true,
      autoPlay: true
    },
    swfPath: "js/jPlayer",
    supplied: "webmv, ogv, m4v, oga, mp3",
    smoothPlayBar: true,
    keyEnabled: true,
    audioFullScreen: false
  });
  
  $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').removeClass('animate');
    $('.jp-play-me').removeClass('active');
    $('.jp-play-me').parent('li').removeClass('active');
  });

  $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').addClass('animate');
  });

  $(document).on('click', '.jp-play-me', function(e){
    e && e.preventDefault();
    var $this = $(e.target);
    if (!$this.is('a')) $this = $this.closest('a');

    $('.jp-play-me').not($this).removeClass('active');
    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');

    $this.toggleClass('active');
    $this.parent('li').toggleClass('active');
    if( !$this.hasClass('active') ){
      myPlaylist.pause();
    }else{
      var i = Math.floor(Math.random() * (1 + 7 - 1));
      myPlaylist.play(i);
    }
    
  });



  // video

    $("#jplayer_1").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Hold It",
        m4v: "http://ziiiwoo-ziiwo.stor.sinaapp.com/VEDIO/Hold It -NIKAMILL.flv",
        // ogv: "http://ziiiwoo-ziiwo.stor.sinaapp.com/VEDIO/Hold It -NIKAMILL.flv",
        // webmv: "http://ziiiwoo-ziiwo.stor.sinaapp.com/VEDIO/Hold It -NIKAMILL.flv",
        poster: "http://ziiiwoo-ziiwo.stor.sinaapp.com/COVER/hold It.png"
      });
    },
    swfPath: "assets/js/jPlayer",
    solution: "flash, html",
    supplied: "webmv, ogv, m4v",
    size: {
      // width: "640px",
      // height: "360px",
       width: "1150px",
      height: "360px",
      cssClass: "jp-video-360p"
    },
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true,
    remainingDuration: true,
    toggleDuration: true
  });
   
});