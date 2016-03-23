 


(function(){

console.log("Yep the SEAF Fired"); 


var split3 = document.querySelector('.split3D');
 var split4 = document.querySelector('.split4D');
 var splitTxt = document.querySelector('.splitTextFound');

     var screenPos;
     var image;

function moveSplit(){
	
	
  


	screenPos = window.scrollY;
	image = split3.offsetTop;
		

		if(screenPos - 400 > image){
			split3.style.opacity = "1";
			split4.style.opacity = "1";
			split3.style.marginTop = "20px";
			split4.style.marginTop = "50px";
			splitTxt.style.opacity = "1";
			
			// console.log("animate in");
		}

		else{
			split3.style.opacity = "0";
			split4.style.opacity = "0";
			split3.style.marginTop = "60px";
			split4.style.marginTop = "-60px";
			splitTxt.style.opacity = "0";
			
		}

	
// console.log("screen Pos:" + screenPos);
// console.log("img pos:" + image);

}

// video player toggle mute function

window.addEventListener("scroll", moveSplit, false);

})();