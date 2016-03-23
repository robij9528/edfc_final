


(function(){

console.log("Yep the SEAF Fired"); 


var split1 = document.querySelector('.split1D');
 var split2 = document.querySelector('.split2D');
 var splitTxt = document.querySelector('.splitText');

     var screenPos;
     var image;

function moveSplit(){
	
	
  


	screenPos = window.scrollY;
	image = split1.offsetTop;
		

		if(screenPos - 400 > image){
			split1.style.opacity = "1";
			split2.style.opacity = "1";
			split1.style.marginTop = "20px";
			split2.style.marginTop = "50px";
			splitTxt.style.opacity = "1";
			
			// console.log("animate in");
		}

		else{
			split1.style.opacity = "0";
			split2.style.opacity = "0";
			split1.style.marginTop = "60px";
			split2.style.marginTop = "-60px";
			splitTxt.style.opacity = "0";
			
		}

	
// console.log("screen Pos:" + screenPos);
// console.log("img pos:" + image);

}

// video player toggle mute function

window.addEventListener("scroll", moveSplit, false);

})();