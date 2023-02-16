 <?php 
if ( is_page_template('page-about.php') ) {
	if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('About') ) : 
	endif; 
	}
else if ( is_page_template('page-getting-started.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Getting Started') ) : 
	endif; 
}
else if ( is_page_template('page-trying-to-conceive.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Trying to Conceive') ) : 
	endif; 
}
else if ( is_page_template('page-female-infertility.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Female Infertility') ) : 
	endif; 
}
else if ( is_page_template('page-male-infertility.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Male Infertility') ) : 
	endif; 
}
else if ( is_page_template('page-fertility-treatments.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Fertility Treatments') ) : 
	endif; 
}
else if ( is_page_template('page-donor-surrogacy.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Donor/Surrogacy') ) : 
	endif; 
}
else if ( is_page_template('page-about.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('About MFS') ) : 
	endif; 
}
else if ( is_page_template('page-donate-my-eggs.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Donate My Eggs') ) : 
	endif; 
}
else if ( is_page_template('page-resources.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Resources') ) : 
	endif; 
}
else if ( is_page_template('page-contact.php') ) {
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Contact') ) : 
	endif; 
}
//else if ( is_post_type_archive('CPTNAME') ) {//<!--CPT Conditional-->
//	 if ( !function_exists('dynamic_sidebar')
//	|| !dynamic_sidebar('CPTSIDEBAR') ) : 
//	endif; 
//}
//else if ( is_singular('CPTNAME') ) {//<!--CPT Single Post Conditional-->
//	 if ( !function_exists('dynamic_sidebar')
//	|| !dynamic_sidebar('CPTSIDEBAR') ) : 
//	endif; 
//}
else if ( is_home() ) {//<!--Blog Conditional-->
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Blog Sidebar') ) : 
	endif; 
}
else if ( is_single() ) {//<!--Blog Single Page Conditional-->
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Blog Sidebar') ) : 
	endif; 
}
else if ( is_archive() ) {//<!--Archive Conditional-->
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Blog Sidebar') ) : 
	endif; 
}
else if ( is_search() ) {//<!--Search Results Conditional-->
	 if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Blog Sidebar') ) : 
	endif; 
}
else {//<!--Default Page Conditional-->
	if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('page-sidebar') ) : 
	endif; 
	}
?>