$(document).ready(init);

function init() {
    var things = $('#things');

    things.imagesLoaded( function(){
        things.isotope({
        	itemSelector : '.thing'
        });
    });
}