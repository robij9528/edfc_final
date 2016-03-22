var mainvideo = document.querySelector('#mainVid');
var mutevol = document.querySelector('#muteButton');
var currentvolume = mainvideo.volume;
mainvideo.volume = 0;


 var el = document.querySelector("#nextBtn");
  if (el.addEventListener) {
      el.addEventListener("click", yourNextFunction, false);
  } else {
      el.attachEvent('onclick', yourNextFunction);
  } 


var video_count =1,
    videoPlayer = document.querySelector("#mainVid");

function yourNextFunction (){
      video_count++;
      if (video_count == 3) video_count = 1;
      var nextVideo = "video/vidSample"+video_count+".mp4";
      videoPlayer.src = nextVideo;
      videoPlayer.play();

    
}

function buttonColor(){
	  if(videoPlayer.src = "video/vidSample2.mp4"){
      	el.style.opacity = "0.9";
      }
      else{
      	el.style.opacity = "0.4";
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

el.addEventListener('click', buttonColor, false);
mutevol.addEventListener('click', toggleMuteIcon, false);
mutevol.addEventListener('click', muteUnmute, false);
videoPlayer.addEventListener("ended", yourNextFunction, false);