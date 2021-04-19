/*===================================*
	01. SHOP QUICK VIEW JS
	*===================================*/

	var owl = $('.owl-thumbs-slider');
    owl.owlCarousel({
        loop: false,
        items: 4,
		dots: false,
		margin: 10,
		nav: true,
		navText: ['<i class="ion-ios-arrow-back"></i>', '<i class="ion-ios-arrow-forward"></i>'],
    });
	
	$('.plus').on('click', function() {
		if ($(this).prev().val()) {
			$(this).prev().val(+$(this).prev().val() + 1);
		}
	});
	$('.minus').on('click', function() {
		if ($(this).next().val() > 1) {
			if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		}
	});
	
	if ($(window).width() >= 768) {
	 var firstImgHeight = $("#product_img").height();
	 var divWidth = $(".pr_detail").width();
	 $("#product_img").elevateZoom({
		 cursor: "crosshair",
		 easing : true,  
		 gallery:'pr_item_gallery',
		 zoomWindowOffetx: 30, 
		 zoomWindowWidth:divWidth,
		 zoomWindowHeight:firstImgHeight,
		 borderSize: 0,
		 galleryActiveClass: "active"
	 }); 
	}
	else {
		$("#product_img").elevateZoom({
			cursor: "crosshair",
			easing : true,  
			gallery:'pr_item_gallery',
			zoomType: "inner",
			galleryActiveClass: "active"
		 }); 
	}