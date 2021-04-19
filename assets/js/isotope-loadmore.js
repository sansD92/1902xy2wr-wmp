/*===================================
Author       : Bestwebcreator.
Template Name: Anger - Creative Business & Portfolio Multi-purpose HTML5 Template
Version      : 2.0
===================================*/

(function($) {
	'use strict';
	
// init Isotope
  var $container = $('.loadmore').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'masonry',
  });

  //****************************
  // Isotope Load more button
  //****************************
  var initShow = $('.loadmore').data('item'); //number of items loaded on init & onclick load more button
  var counter = initShow; //counter for load more button
  var iso = $container.data('isotope'); // get Isotope instance

  loadMore(initShow); //execute function onload

  function loadMore(toShow) {
    $container.find(".portfolio-item.portfolio_hide").removeClass("portfolio_hide");

    var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
      return item.element;
    });
    $(hiddenElems).addClass('portfolio_hide');
    $container.isotope('layout');


    //when no more to load, hide show more button
    if (hiddenElems.length == 0) {
      jQuery("#load-more").hide();
    } else {
      jQuery("#load-more").show();
    };

  }

  //append load more button
  $container.after('<div class="text-center d-inline-block w-100"><button id="load-more" class="btn btn-default mt-5"> Load More</button></div>');

  //when load more button clicked
  $("#load-more").click(function() {
	var show = $('.loadmore').data('item-show');
    counter = counter + show ;
	$("#load-more").addClass('loading');
		setTimeout(function(){
		  $('#load-more').removeClass('loading');
		  loadMore(counter);
		}, 800);
  });
  
})(jQuery);