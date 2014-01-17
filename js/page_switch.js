$(function() 
{
	var urls = [
		"/Portfolio/contact.php #contact",
		"/Portfolio/portfolio.php .projects > *",
		"/Portfolio/contact.php #contact"
	];

	var i = 1;
	$('#right_arrow_port').click(function()
	{
		$('.projects').fadeOut(300, function (){
			$('.projects').load(urls[i+1]).fadeIn(300);
			i++;
			if (i>urls.length-2){
				i = 0;
			}
		});
	});

	$('#left_arrow_port').click(function()
	{
		$('.projects').fadeOut(300, function (){
			$('.projects').load(urls[i-1]).fadeIn(300);
			i--;
			if (i==0){ 
				i = urls.length-1;
			}
		});
	});
});


$(document).ready(function(){
   $(window).bind('scroll', function() {
    var navHeight = $( window ).height()-170;
         if ($(window).scrollTop() > navHeight) {
             $('.white_wall').addClass('fixed');
         }
         else {
             $('.white_wall').removeClass('fixed');
         }
    });
});

$(function(){
  $('#portfolio_hidden').fadeIn(700);
});

$(function(){
	var change = $("#switch_page_icon i");
	change.hover(function(){
		$(this).toggleClass('arrow_hover', 200);
	});
});