// -------------------------------------> Full Width Mobile Navigation Triggers <--------------------------------
function openfullscreennav(){
	document.getElementById("full-screen-nav-overlay-target").style.height = "100%";
	document.getElementById('full-screen-hamburger-nav-container').style.display = "none";
}

function closefullscreennav(){
	document.getElementById("full-screen-nav-overlay-target").style.height = "0%";
	document.getElementById('full-screen-hamburger-nav-container').style.display = "block";
}
jQuery('#full-screen-nav-container ul.sub-menu').addClass('collapse');
jQuery('#full-screen-nav-container li.menu-item-has-children a').addClass("targetnav");
jQuery('#full-screen-nav-container li.menu-item-has-children a').on('mouseover',function(anticlick){
	if(jQuery(this).hasClass('targetnav')){
		anticlick.preventDefault();
	}
	jQuery(this).next("ul").slideToggle("slow");
});

// -------------------------------------> Back to Top <--------------------------------
jQuery(document).ready(function($){
	$(window).scroll(function(){
        if ($(this).scrollTop() < 200) {
			$('#smoothup') .fadeOut();
        } else {
			$('#smoothup') .fadeIn();
        }
    });
	$('#smoothup').on('click', function(){
		$('html, body').animate({scrollTop:0}, 'fast');
		return false;
		});
});

// -------------------------------------> Fixed Navigation <--------------------------------
jQuery(document).ready(function($){
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50 && $(window).width() > 568) /* .navbar = navbar-fixed-top 568 is the mobile screen size*/ {
      $('header.header-main').addClass('navbar-fixed-top');
    } else {
     $('header.header-main').removeClass('navbar-fixed-top');
    }
  });
});


// -------------------------------------> Smooth Scroll On Anchor Links (Warning - Since it shares # it messes up Back to Top and BS Toggle Tabs) <--------------------------------
//jQuery(function($) { 
// 
//$('a[href^="#"]').live('click',function(event){
//    event.preventDefault();
//    var target_offset = $(this.hash).offset() ? $(this.hash).offset().top : 0;
//    //change this number to create the additional off set        
//    var customoffset = 85;
//    $('html, body').animate({scrollTop:target_offset - customoffset}, 500);
//});
// 
//}(jQuery));

// -------------------------------------> Remove .vcenter on Phone <--------------------------------
if (jQuery(window).width() < 568) {
   jQuery('aside').removeClass('vcenter');
}


// -------------------------------------> Collapse on Sidebar Sub Nav <--------------------------------
	 //HIDE the Widget Menu - SUB MENU On Default
jQuery("#widget-box ul.sub-menu").addClass('collapse');
	//Add Font Awesome Plus Icon before the Menus with Children Navigation
jQuery("#widget-box ul.menu li.menu-item-has-children > a").before('<a class="plus" href="javascript:;"><i class="fas fa-plus-circle"></i></a> ');
	// Target the Plus Icon Link and give it a class .targetnav
jQuery('.menu-item-has-children > a.plus').addClass('targetnav');
	// When the Plus Icon Link is clicked, Find ALL instance of sub-menu and collapse it.
jQuery('.menu-item-has-children > a.plus').click(function(e) {
    if (jQuery(this).hasClass('targetnav')) {
        e.preventDefault();
    }
    
    jQuery(this).nextAll(".sub-menu").slideToggle("slow");
});
//After Click, with sub navigation for corresponding page shows collapsed
jQuery('#widget-box .current-menu-item > .sub-menu').css('display','block');
jQuery('#widget-box .current-menu-ancestor > .sub-menu').css('display','block');

// -------------------------------------> YouTube Responsive - Bootstrap <--------------------------------
jQuery('iframe[src*="youtube.com"]').addClass('embed-responsive-item').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');

// -------------------------------------> Add Styling to Pagination <--------------------------------
jQuery('.pagination a').addClass('page-link');
jQuery('.page-numbers').addClass('pagination justify-content-center');
jQuery('.page-numbers.pagination li').addClass('page-item');
jQuery('.page-numbers.pagination li.page-item a').addClass('page-link');
jQuery('span.current.pagination').wrap('<span class="page-link"></span>');

// -------------------------------------> Remove ... From before Read More <--------------------------------
jQuery('.read-more').prev('p').css({"display": "none"});

//--------------------------------------------------------------> FancyBox <------------------------------------------------//
        //---------------------------> Single Image <--------------------------//
jQuery("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg'], a[href$='.gif']").attr('data-fancybox','singlegallery');
        //---------------------------> WP Gallery <--------------------------//
jQuery(".gallery a[href$='.jpg'], .gallery a[href$='.png'], .gallery a[href$='.jpeg'], .gallery a[href$='.gif'], .tiled-gallery__item a[href]").attr('data-fancybox','multigallery');
        //---------------------------> Auto Add FancyBox 3 to all YouTube Links <--------------------------//
jQuery('a[href*="https://www.youtube.com/watch?"]').each(function() {
  jQuery(this).attr('data-fancybox','');
 });
jQuery('a[href*="https://youtu.be/"]').each(function() {
  jQuery(this).attr('data-fancybox','');
 });

/* ## Remove EMPTY <p></p> sections
--------------------------------------------- */
jQuery('p:empty').remove();

//--------------------------------------------------------------> Other <------------------------------------------------//
jQuery("a[href$='.pdf'], a[href$='.doc'], a[href$='.docx']").attr('target','_blank'); // Force .pdf files to always open in a new window