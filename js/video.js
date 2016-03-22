
(function(){
var mainvideo = document.querySelector('#mainVid');
var mutevol = document.querySelector('#muteButton');
var currentvolume = mainvideo.volume;
mainvideo.volume = 0;


 var vid = document.querySelector("#nextBtn");
  if (vid.addEventListener) {
      vid.addEventListener("click", yourNextFunction, false);
  } else {
      vid.attachEvent('onclick', yourNextFunction);
  } 

 var vid2 = document.querySelector("#nextBtn2");
  if (vid2.addEventListener) {
      vid2.addEventListener("click", yourNextFunction, false);
  } else {
      vid2.attachEvent('onclick', yourNextFunction);
  } 



var video_count =1,
    videoPlayer = document.querySelector("#mainVid");

function yourNextFunction (){
      video_count++;
      if (video_count == 3) video_count = 1;
      var nextVideo = "video/video"+video_count+".mp4";
      videoPlayer.src = nextVideo;
      videoPlayer.play();

    
}

function buttonColor(){
	  if(video_count == 2){
      	vid.style.opacity = "0.9";
      	vid2.style.opacity = "0.4";
      }
      else if(video_count == 1){
      	vid.style.opacity = "0.4";
      	vid2.style.opacity = "0.9";
      }
}

function muteUnmute(){
	

	if(mainvideo.volume > 0){
		mainvideo.volume = 0;

		mutevol = "UnMute";
	}
	else{
		mainvideo.volume = currentvolume;
		
		mutevol = "Mute";
	}
}



function toggleMuteIcon() {
    var image = document.getElementById('soundIcon');
    if (image.src.match("mute")) {
        image.src = "images/sound.svg";
    } else {
        image.src = "images/mute.svg";
    }
}


vid2.addEventListener('click', buttonColor, false);
vid.addEventListener('click', buttonColor, false);
videoPlayer.addEventListener('playing', buttonColor, false);
mutevol.addEventListener('click', toggleMuteIcon, false);
mutevol.addEventListener('click', muteUnmute, false);
videoPlayer.addEventListener("ended", yourNextFunction, false);


})();