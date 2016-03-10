
function toggleCP(){
	var cp = document.getElementById("cp");
	cp.style.height = window.innerHeight - 60+"px";
	if(cp.style.left == "0px"){
		cp.style.left = "-320px";
	} else {
		cp.style.left = "0px";
	}
}