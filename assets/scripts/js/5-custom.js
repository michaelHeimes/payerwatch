jQuery( document ).ready(function($) {
	
	var _app = window._app || {};
		
	_app.emptyParentLinks = function() {
			
		$('.menu li a[href="#"]').click(function(e) {
		    e.preventDefault ? e.preventDefault() : e.returnValue = false;
		});	
		
	};
	
	_app.fixed_nav_hack = function() {
		$(document).on('click', 'a#menu-toggle', function(){
			
			if ( $(this).hasClass('clicked') ) {
				$(this).removeClass('clicked');
				$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
			
			} else {
			
				$(this).addClass('clicked');
				$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
			
			}
			
		});
	
		$(document).on('click', '.js-off-canvas-overlay', function(){
			$('a#menu-toggle').removeClass('clicked');
			$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
		});

	}
	
	_app.expanding_card_slider = function() {
		if( $('.expanding-card-slider').length ) {
			$('.expanding-card-slider').each(function( index ) {
				let $slider = $(this).find('.slider');
				
				$($slider).slick({
					infinite: false,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
					rows: 0,
					variableWidth: true,
				}).on({
					afterChange: function (event, slick, currentSlide, nextSlide) {
						let $slide = $($slider).find('.single-slide');
						
						$($slide).each(function( index ) {
							
							console.log($(this));
							
							if( $(this).hasClass('slick-current') ) {
								$(this).addClass('widen');
							} else {
								$(this).removeClass('widen');
							}
													
						});

					}
				});
				
				
			});
		}

	}
			
	_app.init = function() {
		// Standard Functions
		_app.emptyParentLinks();
		_app.fixed_nav_hack();
		_app.expanding_card_slider();
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});