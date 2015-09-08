<?php
	function register_my_menu(){
	    register_nav_menu('header-top',__('Header Navigation'));
	}

	add_action('init', 'register_my_menu');

	function new_nav_menu_items($items) 
	{
	    $items = "";

	    $args = array("post_type" => "page", "order" => "ASC", "orderby" => "menu_order");
	    $the_query = new WP_Query($args);

	    if($the_query->have_posts()): 
	        while($the_query->have_posts()):
	            $the_query->the_post(); 
	                $items .= '<li><a href="#'. the_slug() .'">' . get_the_title() . '</a></li>';            
	        endwhile;
	    else: 
	        echo "";
	    endif;
	    return $items;
	}
	add_filter("wp_nav_menu_items", "new_nav_menu_items");

	

	function the_slug($echo=true){
	  $slug = basename(get_permalink());
	  //do_action('before_slug', $slug);
	  $slug = apply_filters('slug_filter', $slug);
	  
	  //do_action('after_slug', $slug);
	  return $slug;
	}