$(window).scroll(scroll);
function scroll(){
	var button = document.getElementsByClassName('backtotop');
	var scroll = $(window).scrollTop();
	
	if (scroll >= 300) {
		button[0].classList.remove('desactive');
		button[0].classList.add('active');
	}else {
		button[0].classList.remove('active');
		button[0].classList.add('desactive');
	}
	
}