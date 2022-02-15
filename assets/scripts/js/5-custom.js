jQuery( document ).ready(function($) {
	
	var _app = window._app || {};
	
	gsap.registerPlugin(ScrollTrigger);
		
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
	
	_app.nav_spacer = function() {
		$(window).on("load resize", function(e) {
			let $navHeight = $('#top-bar-menu').outerHeight();
			$('.banner').css('padding-top', $navHeight);
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
/*
					beforeChange: function (event, slick, currentSlide, nextSlide) {
						let $slide = $($slider).find('.single-slide:not(.slick-current)');
						
						$($slide).each(function( index ) {
							
							console.log($(this));
							
							if( $(this).hasClass('slick-current') ) {
								$(this).removeClass('hide-text');
							} else {
								$(this).find('p').css('opacity', '0');
							}
													
						});

					},
*/
					afterChange: function (event, slick, currentSlide, nextSlide) {
						let $slide = $($slider).find('.single-slide');
						
						$($slide).each(function( index ) {
							
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
	
	
	_app.g_pipe = function() {
		if( $('.g-pipe').length ) {
			$('.g-pipe').each(function( index ) {
				let gPipe = $(this);
				
				gsap.from( gPipe, {
					width:'0%',
					ease: 'circ.out',
					duration: .7,
					scrollTrigger: {
						start: 'top 80%',
						end: 'bottom top',
						toggleActions: "play none none reverse",
						trigger: gPipe,
					}
				});					
			
			});
		}
	}
	
	_app.arrow_checklist = function() {
		if( $('.copy-and-arrow-checklist li').length ) {
			$('.copy-and-arrow-checklist li').each(function( index ) {
				
				gsap.from( this, {
					autoAlpha: 0,
					y: 50,
					ease: 'power2.out',
					duration: .7,
					scrollTrigger: {
						start: 'bottom bottom+=25px',
						end: 'bottom top',
						toggleActions: "play none none reverse",
						trigger: this,
					}
				});	
				
			});
		}
	}


	_app.partner_quotes = function() {
		if( $('.pq-slider').length ) {
			$('.pq-slider').each(function( index ) {
				let $slider = $(this);
				
				$($slider).slick({
					infinite: false,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
					rows: 0,
					centerMode: true,
					speed: 500,
					infinite: true
				});
				
				
			});
		}
	}

	_app.webinars_slider = function() {
		if( $('.webinars-slider').length ) {
			$('.webinars-slider').each(function( index ) {
				let $slider = $(this);
				
				$($slider).slick({
					infinite: false,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
					rows: 0,
					centerMode: true,
					speed: 500,
					infinite: true
				});
				
				
			});
		}
	}
	
	_app.has_scrolled = function() {

		// Fixed nav trigger
		$(window).on("load scroll resize", function(e) {
			var header_height = 1;
			var sticky_height = 1;
			var fade_height = 0;
			
			if ($(this).scrollTop() > (header_height)) {
				$('body').addClass('sticky-header');
			} else {
				$('body').removeClass('sticky-header');
			}

			if ($(this).scrollTop() > (header_height + sticky_height)) {
				$('body').addClass('fade-header');
			} else {
				$('body').removeClass('fade-header');
			}

			if ($(this).scrollTop() > (header_height + sticky_height + fade_height)) {
				$('body').addClass('has-scrolled');
			} else {
				$('body').removeClass('has-scrolled');
			}

		});

	};
	
	_app.page_banners = function() {
				
		if($('.page-banner').length) {

			let leftInner = $('.page-banner .left-inner');
			let bigBtn = $('.page-banner .btn-link');
			let themeBg = $('.page-banner .theme-color-bg');
			let bannerImg = $('.page-banner .right img');
			
			let tl = gsap.timeline({scrollTrigger:{
				trigger: '.page-banner',
				start:"top 75%",
				end:"bottom top",
				delay: .1,
				toggleActions: "play none none reverse",
			}})
			.from(leftInner, {
				y: 70, opacity:0, ease:"power2.inOut", duration:.5
			})
			.from(bigBtn, {
				x: -70, opacity:0, ease:"power2.inOut", duration:.5
			}, .2)
			.from(themeBg, {
				x: -70, ease:"power2.inOut", duration:.5
			}, .4)
			.from(bannerImg, {
				x: -70, opacity:0, ease:"power2.inOut", duration: 1
			}, .5)
			
		}
	}
	
	_app.team_cards = function() {
				
		if($('.team-preview').length) {
			const $slider = $('.team-preview .slider');
			const $card1 = $('.single-card[data-order="1"]');
			const $card2 = $('.single-card[data-order="2"]');
			const $card3 = $('.single-card[data-order="3"]');
			const $skyBlue = '#dce7f0';
			const $blue = '#12108f';
			const $scale = .7;
			const $shortDuration = .4;
			const $longDuration = .6;
			const $leftMost = '-90%';
			const $rightMost = '-10%';
			const $easeIn = 'power2.in';
			const $easeOut = 'power2.out';
			
			gsap.from( $slider, {
				autoAlpha: .5,
				scaleX: .9,
				scaleY: .9,
				ease: 'circ.out',
				duration: .7,
				scrollTrigger: {
					start: 'top 80%',
					end: 'bottom top',
					toggleActions: "play none none reverse",
					trigger: $slider,
					toggleClass: {targets: '.team-preview', className: 'active'},
				}
			});	
			
/*
			ScrollTrigger.create({
			    trigger: '.team-preview .inner',
			    start: 'top 75%',
				endTrigger: '.team-preview .inner',
				end: 'bottom 0%',
				toggleClass: {targets: '.team-preview', className: 'active'},
				toggleActions: 'play none play reverse',
			});
*/

			$('.card-nav li:nth-child(1) button').addClass('clicked');
			$('.card-nav li:nth-child(1) button').attr('aria-selected', true);

			$('.card-nav button').click(function(e){
				$order = $(this).data('order');
				$activeCard = $($slider).attr('data-slide');
				$(this).addClass('clicked');
				$(this).attr('aria-selected', true);
				$(this).parent().siblings().find('button').removeClass('clicked');
				$(this).parent().siblings().find('button').attr('aria-selected', false);
				
				if ($order == 1 ) {
					
					if ( $($card1).hasClass('front') ) {

					} else {

						if ($activeCard == 2) {
							gsap.to($card1, {duration: $longDuration, x: '-100%', scaleX: $scale, scaleY: $scale, zIndex: 3, ease: $easeOut});						
							gsap.to($card1, {delay: $longDuration, duration: $shortDuration, x: '0%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeIn});
							
							gsap.to($card2, {duration: $longDuration, x: '50%', scaleX: 1, scaleY: 1, zIndex: 4, ease: $easeOut});
							gsap.to($card2, {delay: $longDuration, duration: $shortDuration, x: $rightMost, scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 3, ease: $easeIn});
							
							gsap.to($card3, {duration: $longDuration, x: $leftMost, scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 1, ease: $easeIn});
						}

						if ($activeCard == 3) {
							gsap.to($card1, {duration: $longDuration, x: '100%', scaleX: $scale, scaleY: $scale, zIndex: 2, ease: $easeOut});						
							gsap.to($card1, {delay: $longDuration, duration: $shortDuration, x: '0%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeIn});

							gsap.to($card2, {zIndex: 0});
							gsap.to($card2, {delay: $longDuration, duration: $longDuration, x: $rightMost, scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 0, ease: $easeIn});
							
							gsap.to($card3, {duration: $shortDuration, x: '-150%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeOut});
							gsap.to($card3, {delay: $longDuration, duration: $shortDuration, x: $leftMost, scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 1, ease: $easeIn});
						}

						$($card1).addClass('front');
						$($card1).siblings().removeClass('front');	
						$($slider).attr('data-slide', 1);
							
					}
					
				}				

				if ($order == 2 ) {
					
					if ( $($card2).hasClass('front') ) {

					} else {
						
						if ($activeCard == 1) {
							gsap.to($card1, {duration: $longDuration, x: '-150%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeOut});
							gsap.to($card1, {delay: $longDuration, duration: $shortDuration, x: '-40%', scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 3, ease: $easeIn});
							
							gsap.to($card2, {duration: $longDuration, x: '50%', scaleX: $scale, scaleY: $scale, zIndex: 2, ease: $easeOut});
							gsap.to($card2, {delay: $longDuration, duration: $shortDuration,  x: '-50%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeIn});
							
							gsap.to($card3, {duration: $shortDuration, x: $rightMost, scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 1, ease: $easeIn});
						}
						
						if ($activeCard == 3) {
							gsap.to($card1, {duration: $longDuration, x: '-50%', scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 1, ease: $easeIn});
							
							gsap.to($card2, {duration: $longDuration, x: '-160%', scaleX: $scale, scaleY: $scale, zIndex: 2, ease: $easeOut});
							gsap.to($card2, {delay: $longDuration, duration: $shortDuration,  x: '-50%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeIn});

							gsap.to($card3, {duration: $longDuration, x: '100%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeOut});
							gsap.to($card3, {delay: $longDuration, duration: $shortDuration, x: $rightMost, scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 1, ease: $easeIn});
						}						
						
						$($card2).addClass('front');
						$($card2).siblings().removeClass('front');						
						$($slider).attr('data-slide', 2);
					}
					
				}	
				
				if ($order == 3 ) {

					if ( $($card3).hasClass('front') ) {

					} else {

						if ($activeCard == 1) {
							gsap.to($card1, {duration: $longDuration, x: '-115%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 3, ease: $easeOut});
							gsap.to($card1, {delay: $longDuration, duration: $shortDuration, x: '40%', scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 1, ease: $easeIn});
							
							gsap.to($card2, {duration: $longDuration, x: '-90%', scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 3, ease: $easeIn});
							
							gsap.to($card3, {duration: $longDuration, x: '250%', scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 1, ease: $easeOut});
							gsap.to($card3, {delay: $longDuration, duration: $shortDuration, x: '-50%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeIn});
						}
						
						if ($activeCard == 2) {
							gsap.to($card2, {duration: $longDuration, x: '-110%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeOut});
							gsap.to($card2, {delay: $longDuration, duration: $shortDuration, x: '-90%', scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 2, ease: $easeIn});
							
							gsap.to($card3, {duration: $longDuration, x: '90%', scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 3, ease: $easeOut});
							gsap.to($card3, {delay: $longDuration, duration: $shortDuration, x: '-50%', scaleX: 1, scaleY: 1, backgroundColor: $blue, zIndex: 4, ease: $easeIn});
							
							gsap.to($card1, {duration: $longDuration, x: '40%', scaleX: $scale, scaleY: $scale, backgroundColor: $skyBlue, zIndex: 3, ease: $easeIn});
						}
						
						$($card3).addClass('front');
						$($card3).siblings().removeClass('front');						
						$($slider).attr('data-slide', 3);

					}

				}	

			});

		}

	}

			
	_app.init = function() {
		// Standard Functions
		_app.emptyParentLinks();
		_app.fixed_nav_hack();
		_app.nav_spacer();
		_app.has_scrolled();
		_app.page_banners();
		_app.expanding_card_slider();
		_app.partner_quotes();
		_app.g_pipe();
		_app.arrow_checklist();
		_app.webinars_slider();
		_app.team_cards();
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});