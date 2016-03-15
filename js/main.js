/*  var scrollingNav = document.querySelector('.navBgScroll');
 var scrollable = document.querySelector('body');*/

function toggleCP(){
	var cp = document.getElementById("cp");
	cp.style.height = window.innerHeight - 60+"px";
	if(cp.style.left == "0px"){
		cp.style.left = "-320px";
	} else {
		cp.style.left = "0px";
	}
}

/*scrollable.onscroll = function() {
	changeNav(scrollingNav);
};

function changeNav(scrollingNav) {
	

	var elementHeight = scrollable.offsetHeight;
	var scrollTopPosition = scrollable.scrollTop;
	var scrollBottomPosition = scrollTopPosition + elementHeight;
	var staticNav = document.querySelector('.navBg');
	var staticNavVisible = (staticNav.offsetTop) >= scrollTopPosition;


scrollingNav.style.top = scrollTopPosition + 'px';

if (staticNavVisible) {
	scrollingNav.style.display = 'block';
}


}*/

var navTop, menu, verticalPosition, navElements, navImg;
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
		navTop.style.marginTop = "30px";
		navElements.style.marginTop = "2.5%";
		logo.style.marginTop = "3%";

		
	}
}
window.addEventListener("scroll", scroll);

