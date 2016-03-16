
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
		navTop.style.marginTop = "30px";
		navElements.style.marginTop = "2.5%";
		logo.style.marginTop = "3%";
		goalsH.style.marginTop = "100px";

		
	}




	if(verticalPosition > 700){
		
		goalsH.style.marginTop = "0px";
		goalsH.style.opacity = "1";
		
	} else {
	
		goalsH.style.marginTop = "100px";
		goalsH.style.opacity = "0";

		
	}


	if(verticalPosition > 770){
		
		goalsP.style.marginTop = "0px";
		goalsP.style.opacity = "1";
		
	} else {
	
		goalsP.style.marginTop = "100px";
		goalsP.style.opacity = "0";

		
	}


	if(verticalPosition > 840){
		
		earmarkH.style.marginTop = "0px";
			earmarkH.style.opacity = "1";

		
	} else {
	
		earmarkH.style.marginTop = "100px";
			earmarkH.style.opacity = "0";

		
	}


	if(verticalPosition > 910){
		
		earmarkP.style.marginTop = "0px";
			earmarkP.style.opacity = "1";
		
	} else {
	
		earmarkP.style.marginTop = "100px";
			earmarkP.style.opacity = "0";

		
	}
}
window.addEventListener("scroll", scroll);

