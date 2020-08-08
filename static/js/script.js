var video = document.getElementById('videoBG');
var videoplay = document.getElementById('videoplay');






function toggleMute() {
  video.muted = !video.muted;
}

if (videoplay!=null) {
  videoplay.addEventListener('click', toggleMute);
}

$(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});

