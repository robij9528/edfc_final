


(function(){




function scroll(){
	
	
    split3 = document.querySelector('.split3');
    split4 = document.querySelector('.split4');
    


	verticalPosition = window.pageYOffset;
	if(verticalPosition > 440){
		
		split4.style.marginTop = "20px";
		split4.style.opacity = "1";
		split3.style.marginTop = "0px";
		split3.style.opacity = "1";
		

		
	} else {
		
		split4.style.marginTop = "40px";
		split4.style.opacity = "0";
		split3.style.marginTop = "-40px";
		split3.style.opacity = "0";
		

		
	}




}

// video player toggle mute function

window.addEventListener("scroll", scroll);

})();