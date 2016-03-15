  var scrollingNav = document.querySelector('.navBgScroll');
var scrollable = document.querySelector('body');

function toggleCP(){
	var cp = document.getElementById("cp");
	cp.style.height = window.innerHeight - 60+"px";
	if(cp.style.left == "0px"){
		cp.style.left = "-320px";
	} else {
		cp.style.left = "0px";
	}
}

scrollable.onscroll = function() {
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


}