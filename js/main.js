
function toggleCP(){
	var cp = document.getElementById("cp");
	cp.style.height = window.innerHeight - 60+"px";
	if(cp.style.left == "0px"){
		cp.style.left = "-320px";
	} else {
		cp.style.left = "0px";
	}
}



var navTop, menu, verticalPosition, navElements, navImg;




//video player toggle mute variables
var mainvideo = document.querySelector('#mainVid');
var mutevol = document.querySelector('#muteButton');
var currentvolume = mainvideo.volume;
mainvideo.volume = 0.8;




function scroll(){
	navTop = document.querySelector('.navBg');
	navElements = document.querySelector('.social ul');
	logo = document.querySelector('.navBg a img');
	goalsH = document.querySelector('#fundGoals');
    goalsP = document.querySelector('#fundGoalsP');
    earmarkH = document.querySelector('#earmark');
    earmarkP = document.querySelector('#earmarkP');

	verticalPosition = window.pageYOffset;
	if(verticalPosition > 440){
		navTop.style.height = "80px";
		navTop.style.marginTop = "0px";
		navElements.style.marginTop = "0px";
		logo.style.marginTop = "0.7%";
		goalsH.style.marginTop = "0px";
		
	} else {
		navTop.style.height = "130px";
		navTop.style.marginTop = "0px";
		navElements.style.marginTop = "2.5%";
		logo.style.marginTop = "3%";
		goalsH.style.marginTop = "100px";

		
	}




	if(verticalPosition > 750){
		
		goalsH.style.marginTop = "0px";
		goalsH.style.opacity = "1";
		
	} else {
	
		goalsH.style.marginTop = "50px";
		goalsH.style.opacity = "0";

		
	}


	if(verticalPosition > 850){
		
		goalsP.style.marginTop = "0px";
		goalsP.style.opacity = "1";
		
	} else {
	
		goalsP.style.marginTop = "50px";
		goalsP.style.opacity = "0";

		
	}


	if(verticalPosition > 950){
		
		earmarkH.style.marginTop = "0px";
			earmarkH.style.opacity = "1";

		
	} else {
	
		earmarkH.style.marginTop = "50px";
			earmarkH.style.opacity = "0";

		
	}


	if(verticalPosition > 1050){
		
		earmarkP.style.marginTop = "0px";
			earmarkP.style.opacity = "1";
		
	} else {
	
		earmarkP.style.marginTop = "50px";
			earmarkP.style.opacity = "0";

		
	}
}

// video player toggle mute function
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


mutevol.addEventListener('click', muteUnmute, false);
window.addEventListener("scroll", scroll);

