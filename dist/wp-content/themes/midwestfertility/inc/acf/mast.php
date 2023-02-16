<?php 
	$size = 'xxxlarge';
	//$featuredimage = get_post_thumbnail_id();
		$mast = wp_get_attachment_image_src(get_field('mast_image'), $size);
		$mastvideoposterimage = wp_get_attachment_image_src(get_field('mast_video_poster_image'), $size);
		$mastglobal = wp_get_attachment_image_src(get_field('mast_image', 'options'), $size);
		$mastblog = wp_get_attachment_image_src(get_field('blog_mast_image', 'options'), $size);
		$mastabout = wp_get_attachment_image_src(get_field('about_mfs_mast_image', 'options'), $size);
		$mastgettingstarted = wp_get_attachment_image_src(get_field('getting_started_mast_image', 'options'), $size);
		$masttryingtoconceive = wp_get_attachment_image_src(get_field('trying_to_conceive_mast_image', 'options'), $size);
		$mastfemaleinfertility = wp_get_attachment_image_src(get_field('female_infertility_mast_image', 'options'), $size);
		$mastmaleinfertility = wp_get_attachment_image_src(get_field('male_infertility_mast_image', 'options'), $size);
		$mastfertilitytreatments = wp_get_attachment_image_src(get_field('fertility_treatments_mast_image', 'options'), $size);
		$mastdonorsurrogacy = wp_get_attachment_image_src(get_field('donor_surrogacy_mast_image', 'options'), $size);
		$mastcontact = wp_get_attachment_image_src(get_field('contact_mast_image', 'options'), $size);
		$mastsingleblog = wp_get_attachment_image_src($featuredimage,$size,true); 
        $donate_my_eggs_mast_image = wp_get_attachment_image_src(get_field('donate_my_eggs_mast_image', 'options'), $size);
		$success_stories_mast_image = wp_get_attachment_image_src(get_field('success_stories_mast_image', 'options'), $size);
        $success_story_mast = wp_get_attachment_image_src(get_field('success_story_mast'), $size);
        $resources_mast_image = wp_get_attachment_image_src(get_field('resources_mast_image', 'options'), $size);
if(get_field('turn_off_all_mast_images', 'options')): ?>

<?php //----------------------------------> Choose Soliloquy Slider for Interior Mast instead of Mast Image
elseif(get_field('turn_off_entire_mast') And get_field('soliloquy_slider_slider_id')): ?><div id="mast-int">
    <?php $intslider = get_field('soliloquy_slider_slider_id'); echo do_shortcode('[soliloquy id="'.$intslider.'"]'); ?>></div><?php elseif(get_field('turn_off_entire_mast')): ?>
	
	<?php else: ?>
	<?php if(get_field('mast_video')): //----------------------------------> VIDEO BG MAST ?>
	<div id="mast-int">
  		<video autoplay loop muted poster="<?php echo $mastvideoposterimage[0]; ?>">
   		<source src="<?php the_field('mast_background_video_file'); ?>">
	</video>
         <?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
	
<?php elseif(get_field('mast_image')): //----------------------------------> PAGE SPECIFIC MAST ?>
<div id="mast-int" style="background-image:url(<?php echo $mast[0]; ?>);<?php if(get_field('overwrite_mast_background_image_vertical_position')): ?> background-position:<?php the_field('overwrite_mast_background_image_vertical_position'); ?>;<?php endif; ?>"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>

 <?php elseif(is_post_type_archive('success_stories') and get_field('success_stories_mast_image','options')): //----------------------------------> Success Stories CPT MAST ?>
        <div id="mast-int" style="background-image:url(<?php echo $success_stories_mast_image[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
  
 <?php elseif(is_singular('success_stories') and get_field('success_story_mast')): //----------------------------------> Success Stories CPT SINGULAR MAST - INDIVIDUAL ?>
        <div id="mast-int" style="background-image:url(<?php echo $success_story_mast[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>   
            
 <?php elseif(is_singular('success_stories') and get_field('success_stories_mast_image','options')): //----------------------------------> Success Stories (Global FALLABACK) CPT SINGULAR MAST ?>
        <div id="mast-int" style="background-image:url(<?php echo $success_stories_mast_image[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>

<?php elseif(is_home() and get_field('blog_mast_image','options')): //----------------------------------> BLOG MAST ?>
<div id="mast-int" style="background-image:url(<?php echo $mastblog[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>

<?php /*?><?php elseif(is_singular('post') and get_post_thumbnail_id()): //----------------------------------> BLOG SINGLE POST MAST = Featured Image BG ?>
<div id="mast-int" style="background-image:url(<?php echo $mastsingleblog[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?><?php */?>

<?php elseif(is_singular('post') and get_field('blog_mast_image','options')): //----------------------------------> BLOG SINGLE POST MAST ?>
<div id="mast-int" style="background-image:url(<?php echo $mastblog[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>

<?php elseif(is_archive() and get_field('blog_mast_image','options')): //----------------------------------> BLOG ARCHIVE MAST ?>
<div id="mast-int" style="background-image:url(<?php echo $mastblog[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>

<?php elseif(is_search() and get_field('blog_mast_image','options') ): //----------------------------------> SEARCH ?>
<div id="mast-int" style="background-image:url(<?php echo $mastblog[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>

<?php elseif(is_404() and get_field('blog_mast_image','options') ): //----------------------------------> 404 Page ?>
<div id="mast-int" style="background-image:url(<?php echo $mastblog[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>

<?php elseif(is_page_template('page-about.php') and get_field('about_mfs_mast_image', 'options')): //----------------------------------> ABOUT TEMPLATE MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $mastabout[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
		 
<?php elseif(is_page_template('page-getting-started.php') and get_field('getting_started_mast_image', 'options')): //----------------------------------> GETTING STARTED TEMPLATE MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $mastgettingstarted[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
		 
<?php elseif(is_page_template('page-trying-to-conceive.php') and get_field('trying_to_conceive_mast_image', 'options')): //----------------------------------> TRYING TO CONCEIVE TEMPLATE MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $masttryingtoconceive[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
		 
<?php elseif(is_page_template('page-female-infertility.php') and get_field('female_infertility_mast_image', 'options')): //----------------------------------> FEMALE INFERTILITY TEMPLATE MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $mastfemaleinfertility[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
		 
<?php elseif(is_page_template('page-male-infertility.php') and get_field('male_infertility_mast_image', 'options')): //----------------------------------> MALE INFERTILITY TEMPLATE MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $mastmaleinfertility[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
		 
<?php elseif(is_page_template('page-fertility-treatments.php') and get_field('fertility_treatments_mast_image', 'options')): //----------------------------------> FERTILITY TREATMENTS TEMPLATE MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $mastfertilitytreatments[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
		 
<?php elseif(is_page_template('page-donor-surrogacy.php') and get_field('donor_surrogacy_mast_image', 'options')): //----------------------------------> DONOR/SURROGACY TEMPLATE MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $mastdonorsurrogacy[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
             
<?php elseif(is_page_template('page-donate-my-eggs.php') and get_field('donate_my_eggs_mast_image', 'options')): //----------------------------------> Donate My Eggs TEMPLATE MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $donate_my_eggs_mast_image[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
             
  
<?php elseif(is_page_template('page-resources.php') and get_field('resources_mast_image', 'options')): //----------------------------------> Resources TEMPLATE MAST ?>
 <div id="mast-int" style="background-image:url(<?php echo $resources_mast_image[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
			 
			 
			 
<?php elseif(is_page_template('page-contact.php') and get_field('contact_mast_image', 'options')): //----------------------------------> CONTACT TEMPLATE MAST ?>
 <div id="mast-int" style="background-image:url(<?php echo $mastcontact[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
 
<?php else: //----------------------------------> FALL BACK TO DEFAULT MAST ?>
         <div id="mast-int" style="background-image:url(<?php echo $mastglobal[0]; ?>);"><?php if(get_field('remove_fade_overlay')): ?><?php else: ?><div class="fade-overlay"></div><?php endif; ?>
    <?php endif; ?>
    
   <?php get_template_part( '/inc/acf/mast-headlines', 'mast headlines' ); ?>
  
   </div><!--Mast Container ENDS-->

</div><!--Mast ENDS--><?php endif; // END MAST REMOVAL ?>