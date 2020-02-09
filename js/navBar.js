function toggleOpenClose() {
	let navWidth = document.getElementById("nav-items").style;
	let barIconStyle = document.getElementById("bars-icon").style;
	let allNavItems = [...document.querySelectorAll('#nav-items a')];


	if(navWidth.width == "") {
		navWidth.width = "100%";
		document.getElementById("bars-icon").style.background = "var(--background-color-1)";

	}
	else{
		navWidth.width = "";
		barIconStyle.background = "none";

	}
		
	
}

//  SCROLL TOP BUTTON SCRIPT

window.onscroll = function () {

	let topButton = document.getElementById('top-button-container');
	let whenAppears = 200;
	if (document.body.scrollTop > whenAppears || document.documentElement.scrollTop > whenAppears) {
		topButton.style.visibility = "visible";
		topButton.style.opacity = "1";
	}
	else {
		topButton.style.visibility = "hidden";
		topButton.style.opacity = "0";
	}
}

function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
