window.onload = function() {
	jQuery(function($) {
			$(".site-load").animate({opacity: 0}, 500, function() {
				$(".site-load").hide();
			})
		
		// Download CV Button Handler
			$('.site-content-about-download button').click(function(e) {
			    e.preventDefault();  //stop the browser from following
			    window.location.href = $('.site-content-about-download button').attr('ref');
			});
			if ($( window ).width() <= 800) {
				$(".site-header-menu").addClass("site-header-menu-mobile");
			}
		
		// Scroll Events Handler
			window.addEventListener("scroll",function() {				
				// Variables
				$about = $(".menu-point");
				$skills = $(".site-content-skills");
				$skills_bar = $(".bar-last");
				if ($( window ).width() <= 800) {
					$port = $(".poste[name='1']");
				} else {
					$port = $(".poste[name='4']");
				}
				$serv = $(".site-content-services-box");
				$exp = $(".exp-box-main");
				$edu = $(".edu-box-main");
				$int = $(".int-box-main");
				$con = $(".con-box-main");
				
				// Menu Handler
				if ($( window ).width() > 800) {
					if ( $about.is( ':in-viewport' ) ) {
						$(".site-header-menu-scroll").addClass("site-header-menu");
						$(".site-header-menu-scroll").removeClass("site-header-menu-scroll");
					}
					else {
						$(".site-header-menu").addClass("site-header-menu-scroll");
						$(".site-header-menu").removeClass("site-header-menu");
					}	
				}
				
				// Item In Viewport Handler
				if ( $about.is(  ':in-viewport') ) {
					$(".menu-item-vp").removeClass("menu-item-vp");
					$("#about_but").addClass("menu-item-vp");
					$(".back-to-top").hide(500);
				}
				else if ( $skills.is( ':in-viewport' ) ) {
					$skills.css("opacity", "1");
					$(".menu-item-vp").removeClass("menu-item-vp");
					$("#skills_but").addClass("menu-item-vp");
					$(".back-to-top").show(500);
				}
				if ( $port.is( ':in-viewport' ) ) {
					$(".site-content-port").css("opacity", "1");
					$(".menu-item-vp").removeClass("menu-item-vp");
					$("#port_but").addClass("menu-item-vp");
				}
				if ( $serv.is( ':in-viewport' ) ) {
					$(".site-content-services").css("opacity", "1");
					$(".menu-item-vp").removeClass("menu-item-vp");
					$("#serv_but").addClass("menu-item-vp");
				}
				if ( $exp.is( ':in-viewport' ) ) {
					$(".site-content-exp").css("opacity", "1");
					$(".menu-item-vp").removeClass("menu-item-vp");
					$("#exp_but").addClass("menu-item-vp");
				}
				if ( $edu.is( ':in-viewport' ) ) {
					$(".site-content-edu").css("opacity", "1");
					$(".menu-item-vp").removeClass("menu-item-vp");
					$("#edu_but").addClass("menu-item-vp");
				}
				if ( $int.is( ':in-viewport' ) ) {
					$(".site-content-int").css("opacity", "1");
					$(".menu-item-vp").removeClass("menu-item-vp");
					$("#int_but").addClass("menu-item-vp");
				}
				if ( $con.is( ':in-viewport' ) ) {
					$(".site-content-con").css("opacity", "1");
					$(".menu-item-vp").removeClass("menu-item-vp");
					$("#con_but").addClass("menu-item-vp");
				}
				
				// Aniamte Handler
				if ( $skills_bar.is( ':in-viewport' ) ) {
					$(".site-content-skills-box-bar-f").each(function() {
						$(this).css("width", $(this).attr('ref') + "%");
				  	});
				}
			},false);
		
		// Menu Buttons Handler
			$(".menu-item").click(function() {
				var aTag = $("div[name='"+ $(this).attr("id") +"']");
			    $('html,body').animate({scrollTop: aTag.offset().top - 100},1500);
			});
			$(".back-to-top").click(function() {
			    $('html,body').animate({scrollTop: 0},1000);
			});
			
		//Menu Mobile Button Handler
			$(".site-header-menu-mobile-but").click(function() {
				$("body").css("overflow-y", "hidden");
				$(".site-header-menu-mobile").show(1, function() {
					$(".site-header-menu-mobile").css("background-color", "rgba(0, 0, 0, 0.6)");
					$(".site-header-menu-mobile nav").css("right", "0");
				});
			});
			$(".site-header-menu-mobile").click(function() {
				$("body").css("overflow-y", "scroll");
				$(".site-header-menu-mobile").css("background-color", "rgba(0, 0, 0, 0)");
				$(".site-header-menu-mobile nav").animate({rdisplay: "block"}, 500, function() {
					$(".site-header-menu-mobile").hide();
				});
				$(".site-header-menu-mobile nav").css("right", "-100vw");
			});
			$(".menu-close-but").click(function() {
				$("body").css("overflow-y", "scroll");
				$(".site-header-menu-mobile").css("background-color", "rgba(0, 0, 0, 0)");
				$(".site-header-menu-mobile nav").animate({rdisplay: "block"}, 500, function() {
					$(".site-header-menu-mobile").hide();
				});
				$(".site-header-menu-mobile nav").css("right", "-100vw");
			});
		
		// Isotpe Grid Handler
			var $grid = $('.projectsarchive').isotope({
			  itemSelector: '.poste'
			});
			
			var filters = {};
			
			$('.site-content-port').on( 'click', '.button', function() {
			  var $this = $(this);
			  // get group key
			  var $buttonGroup = $this.parents('.buttongroup');
			  var filterGroup = $buttonGroup.attr('data-filter-group');
			  // set filter for group
			  filters[ filterGroup ] = $this.attr('data-filter');
			  // combine filters
			  var filterValue = concatValues( filters );
			  // set filter for Isotope
			  console.log(filterValue);
			  $grid.isotope({ filter: filterValue });
			});
			
			$(".buttongroup").find("h2").click(function() {
				$(".buttongroup").find('.is-checked').removeClass('is-checked');
				$( this ).addClass('is-checked');
			});
			
			function concatValues( obj ) {
			  var value = '';
			  for ( var prop in obj ) {
			    value += obj[ prop ];
			  }
			  return value;
			}
		
		// Portfolio Load More Button Handler
			$(".site-content-port-load-button").on('click',function() {
				
				$offset = parseInt($(".projectsarchive").attr("offset"));
				$offset += 2;
				$(".projectsarchive").attr("offset", $offset);
				$(".new-post").removeClass("new-post");

	            $.ajax({
		            type: "POST",
		            url: AXAJ.url,
		            data: { "action": "loadMoree", 'offset': $offset },
		            beforeSend: function(){},
			        success: function (data) {
			        	$(".projectsarchive").append(data);
			        	$grid.isotope().append( $(".new-post") ).isotope( 'appended', $(".new-post") ).isotope('layout');
						
						PostClick();
						
						if ($(".poste").last().attr("done") == "true") {
							$(".site-content-port-load-button").hide();
						}
					}
		        });
			});
		
		PostClick();
			
		function PostClick() {
			$(".postClick").click(function() {
				$("body").css("overflow-y", "hidden");
				$("site-content-port-overlay-content").css("overflow-y", "scroll");
				$(".site-content-port-overlay-bg").show();
				$(".site-content-port-overlay-bg").animate({opacity: 0.6}, 400);
				$(".site-content-port-overlay").show();
				$(".site-content-port-overlay").animate({opacity: 1}, 400);
				$(".site-content-port-overlay-image").css("background-image", $(this).find(".postimg").css("background-image"));
				$(".site-content-port-overlay-title").html($(this).find(".postTitle").html());
				$(".site-content-port-overlay-text").html($(this).next(".postContent").html());
				$(".site-content-port-overlay-text").html($(this).find(".postContent").html());
			});
			
			$(".site-content-port-overlay-bg").click(function() {
				$("body").css("overflow-y", "scroll");
				$("site-content-port-overlay-content").css("overflow-y", "hidden");
				$(this).animate({opacity: 0}, 200, function() {
					$(this).hide();
				});
				$(".site-content-port-overlay").animate({opacity: 0}, 200, function() {
					$(".site-content-port-overlay").hide();
				});
			});
			
			$(".site-content-port-overlay-close").click(function() {
				$("body").css("overflow-y", "scroll");
				$("site-content-port-overlay-content").css("overflow-y", "hidden");
				$(".site-content-port-overlay-bg").animate({opacity: 0}, 200, function() {
					$(".site-content-port-overlay-bg").hide();
				});
				$(".site-content-port-overlay").animate({opacity: 0}, 200, function() {
					$(".site-content-port-overlay").hide();
				});
			});
		}
	});
}