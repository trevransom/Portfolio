(function( $ ) {
      $.fn.flickr = function(options) {
        var url = 'http://api.flickr.com/services/rest/?jsoncallback=?';
      
        var settings = $.extend( {
          'api_key': '8098557640488f198febbcd139e753e0',      
        }, options);
        
        function view_image(event) {
          // var $container = $('.album_desc_container'),
          //     $photos = $container.find('.photo'),
          //     $loadingIndicator = $('<div class="loading"><span><img src="http://i.imgur.com/IE7iw.gif" /></span></div>');

          // trigger Isotope after images have loaded
          $container.imagesLoaded( function(){
            $container.isotope({
              // masonry: {
              //   columnWidth: 200
              // }
            });
          });
        }
         
        return this.each(function() {    
          
          var gallery = $(this);
          // gallery.addClass('photo');
          // gallery.addClass('small_image');
          gallery.append('<div id="container"><ul></ul></div>');
          
          $.getJSON(url, {
            method: 'flickr.photosets.getInfo',
            api_key: settings.api_key,            
            photoset_id: settings.photoset_id,
            format: 'json'
          }).success(function(state) {
            // gallery.children('h2').html(state.photoset.title._content);
            // gallery.children('h3').html(state.photoset.description._content);
            
            $.getJSON(url, {
              method: 'flickr.photosets.getPhotos',
              api_key: settings.api_key,
              media: 'photos',
              photoset_id: settings.photoset_id,
              format: 'json',
              extras: 'url_sq,url_m,date_taken,tags'
            }).success(function(state) {
              var list = gallery.find('ul');
              list.html('');
              $( window ).load( view_image );
              
              $.each(state.photoset.photo, function(){
                var large_image = this.url_m;
                large_image = large_image.replace(".jpg", "_b.jpg");
                list.append('<div class="photo"><a href="' + large_image + '"><img class="small_image" src="' + this.url_m + '" ' +
                  'data-title="' + this.title + '" ' + '/></a>');
              });

              $(function(){

              var $container = $('#container ul'),
                  $photos = $container.find('.photo'),
                  $loadingIndicator = $('<div class="loading"><span><img src="http://i.imgur.com/IE7iw.gif" /></span></div>');

              // trigger Isotope after images have loaded
              $container.imagesLoaded( function(){
                $container.isotope({
                  masonry: {
                    columnWidth: 10
                  },
                  itemSelector : '.photo'
                });
              });
              
              // shows the large version of the image
              // shows small version of previously large image
              function enlargeImage( $photo ) {
                $photos.filter('.large').removeClass('large');
                $photo.addClass('large');
                $container.isotope('reLayout');
              }
              
              $photos.find('a').click( function() {
                var $this = $(this),
                    $photo = $this.parents('.photo');

                if ( $photo.hasClass('large') ) {
                  // already large, just remove
                  $photo.removeClass('large');
                  $container.isotope('reLayout');
                } else {
                  if ( $photo.hasClass('has-big-image') ) {
                    enlargeImage( $photo );
                  } else {
                    // add a loading indicator
                    $this.append( $loadingIndicator );
                    
                    // create big image
                    var $bigImage = $('<img>', { src: this.href });

                    // give it a wrapper and appended it to element
                    $('<div>', { 'class': 'big-image' })
                      .append( $bigImage )
                      .appendTo( $this )
                      .imagesLoaded( function() {
                        $loadingIndicator.remove()
                        enlargeImage( $photo );
                      });
                    
                    // add a class, so we'll know not to do this next time
                    $photo.addClass('has-big-image');
                    
                  }
                }

                return false;
              });

            });

              
              
            }).fail(function(state) { 
              alert("Unable to retrieve photo set"); 
            });
          }).fail(function(state) { 
            alert("Unable to retrieve photo set information"); 
          });
        });

      };
    })( jQuery );

    // $(document).on('ready', function(){
    //   $('div#gallery').flickr({ photoset_id: '72157637815342213'});
    // });



