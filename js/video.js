var mainvideo = document.querySelector('#mainVid');
var mutevol = document.querySelector('#muteButton');
var currentvolume = mainvideo.volume;
mainvideo.volume = 0;

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


window.addEventListener('click', toggleMuteIcon, false);
mutevol.addEventListener('click', muteUnmute, false);