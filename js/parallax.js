var url = window.location.href;   
if(url != "http://localhost:8888/Portfolio/photos" && url != "http://localhost:8888/Portfolio/portfolio"){ //remember to appropriately change this upon publishing
    $(window).scroll(function(e){
	  parallax();
	});
}

function parallax(){
  var scrolled = $(window).scrollTop();
  $('.bg').css('top', -(scrolled*0.4)+'px');
}