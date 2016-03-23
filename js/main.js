
	


(function(){

var menu = document.querySelector("#cpBtn");

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
function scroll(){
	navTop = document.querySelector('.navBg');
	navElements = document.querySelector('.social ul');
	logo = document.querySelector('.navBg a img');
	
    


	verticalPosition = window.pageYOffset;
	if(verticalPosition > 440){
		navTop.style.height = "80px";
		navTop.style.marginTop = "0px";
		navElements.style.marginTop = "0px";
		logo.style.marginTop = "0.7%";
		
	
		

		
	} else {
		navTop.style.height = "130px";
		navTop.style.marginTop = "0px";
		navElements.style.marginTop = "2.5%";
		logo.style.marginTop = "3%";
		
	

		
	}




}

// video player toggle mute function

menu.addEventListener("click", toggleCP, false);
window.addEventListener("scroll", scroll);
})();





// video player toggle mute function


