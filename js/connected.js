(function(){
var mainvideo = document.querySelector('#rachelVid');
var rachelTxt = document.querySelector('.listenTo')
var image = document.getElementById('playBtn');



 // var vid = document.querySelector("#nextBtn");
 //  if (vid.addEventListener) {
 //      vid.addEventListener("click", yourNextFunction, false);
 //  } else {
 //      vid.attachEvent('onclick', yourNextFunction);
 //  } 



function playPause() {
if (mainvideo.paused) {
	mainvideo.play();
	
	image.style.display="none";
	rachelTxt.style.display="none";

}
else {
	mainvideo.pause();
	image.style.display="inline";
	rachelTxt.style.display="inline";
}
}

function playVideo() {
	mainvideo.play();
	image.style.display="none";
	rachelTxt.style.display="none";
}






image.addEventListener('click', playVideo, false);

mainvideo.addEventListener('click', playPause, false);


})();