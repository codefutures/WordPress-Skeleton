<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */


/************* ENQUEUE CSS *****************/
function theme_styles()  
{ 
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '3.0.1', 'all' );
	wp_enqueue_style( 'normalize' );
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all' );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	wp_enqueue_style( 'fontawesome' );
	wp_register_style( 'openSans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic,600,600italic', array(), '3.0', 'all' );
	wp_enqueue_style( 'openSans' );
	wp_register_style( 'cloudstrap-theme', get_template_directory_uri() . '/css/cloudstrap.css', array(), '3.0', 'all' );
	wp_enqueue_style( 'cloudstrap-theme' );
	wp_register_style( 'blueimp-gallery', get_template_directory_uri() . '/css/blueimp-gallery.min.css', array(), '3.0', 'all' );
	wp_enqueue_style( 'blueimp-gallery' );
	wp_register_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '3.0', 'all' );
	wp_enqueue_style( 'animate' );
	wp_register_style( 'parallax', get_template_directory_uri() . '/css/dzsparallaxer.css', array(), '3.0', 'all' );
	wp_enqueue_style( 'parallax' );
}
add_action('wp_enqueue_scripts', 'theme_styles');


/************* ENQUEUE JS *************************/
function theme_js() {
	
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', __FILE__, false, '1.11.2', true); // register the local file  
	wp_enqueue_script('jquery'); // enqueue the local file 
	
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', __FILE__, false, '3.3.4', true); // register the local file  
	wp_enqueue_script('bootstrap'); // enqueue the local file
	
	wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', __FILE__, false, '1.11.2', true); // register the local file  
	wp_enqueue_script('custom'); // enqueue the local file 

	wp_register_script('blueimp-gallery', get_template_directory_uri() . '/js/blueimp-gallery.min.js', __FILE__, false, '1.11.2', true); // register the local file  
	wp_enqueue_script('blueimp-gallery'); // enqueue the local file
	 
	wp_register_script('viewport', get_template_directory_uri() . '/js/jquery.viewportchecker.js', __FILE__, false, '1.5.0', true); // register the local file  
	wp_enqueue_script('viewport'); // enqueue the local file 
	wp_register_script('dzsparallax', get_template_directory_uri() . '/js/dzsparallaxer.js', __FILE__, false, '1.5.0', true); // register the local file  
	wp_enqueue_script('dzsparallax'); // enqueue the local file 
	wp_register_script('velocity', get_template_directory_uri() . '/js/velocity.min.js', __FILE__, false, '1.1.0', true); // register the local file  
	wp_enqueue_script('velocity'); // enqueue the local file 

}  
add_action('wp_enqueue_scripts', 'theme_js'); // initiate the function  

require_once('library/BFI_Thumb.php');


// Register Custom Navigation Walker
require_once('includes/wp_bootstrap_navwalker.php');


/*
class cloudstrap_walker_nav_menu extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
            global $wp_query;
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
            $class_names = $value = '';
            
            // If the item has children, add the dropdown class for foundation
            if ( $args->has_children ) {
                $class_names = "dropdown ";
            }
            
			
			//$description = ( ! empty ( $item->description ) and 0 == $depth ) ? '<small class="nav-desc">' . $item->description . '</small>' : '';
			//if($depth == 0 ) {
			//	if( !empty($item->description) ) {
			//		$description = '<small class="nav-desc">' . $item->description . '</small>';
			//		if($description == '<small class="nav-desc"> </small>') {
			//			$description = '<small class="nav-desc">&nbsp;<br/>&nbsp;</small>';
			//		}
			//	}
			//}
			
			
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $class_names .= join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
            $class_names = ' class="'. esc_attr( $class_names ) . '"';
           
            $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            // if the item has children add these two attributes to the anchor tag
            if ( $args->has_children ) {
                 $attributes .= ' class="dropdown-toggle" data-toggle="dropdown"';
             }
			

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= $args->link_after;
			$item_output .= $description;
            // if the item has children add the caret just before closing the anchor tag
            if ( $args->has_children ) {
                //$item_output .= '</a><a href="#" class="flyout-toggle"><span> </span></a>';
				if ($depth == 0 ){ 
					$item_output .= ' <b class="caret"></b></a>';
				} else {
					$item_output .= ' <b class="caret"></b></a>';
				}
            }
            else{
                $item_output .= '</a>';
            }
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
            
        function start_lvl(&$output, $depth) {
            $indent = str_repeat("\t", $depth);
            //$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
			if ($depth == 0 ){ 
				 $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
			} else {
				 $output .= "\n$indent<ul class=\"dropdown-menu sub-menu\">\n";
			}
        }
            
        function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
            {
                $id_field = $this->db_fields['id'];
                if ( is_object( $args[0] ) ) {
                    $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
                }
                return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
            }       
}

*/




/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640;

/**
 * Remove code from the <head>
 */
//remove_action('wp_head', 'rsd_link'); // Might be necessary if you or other people on this site use remote editors.
//remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
//remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
//remove_action('wp_head', 'index_rel_link'); // Displays relations link for site index
//remove_action('wp_head', 'wlwmanifest_link'); // Might be necessary if you or other people on this site use Windows Live Writer.
//remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
//remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
//remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_filter( 'the_content', 'capital_P_dangit' ); // Get outta my Wordpress codez dangit!
remove_filter( 'the_title', 'capital_P_dangit' );
remove_filter( 'comment_text', 'capital_P_dangit' );
// Hide the version of WordPress you're running from source and RSS feed // Want to JUST remove it from the source? Try: remove_action('wp_head', 'wp_generator');
function hcwp_remove_version() {return '';}
add_filter('the_generator', 'hcwp_remove_version');
// This function removes the comment inline css
/*function twentyten_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );*/

/**
 * Remove meta boxes from Post and Page Screens
 */
function customize_meta_boxes() {
   /* These remove meta boxes from POSTS */
  //remove_post_type_support("post","excerpt"); //Remove Excerpt Support
  //remove_post_type_support("post","author"); //Remove Author Support
  //remove_post_type_support("post","revisions"); //Remove Revision Support
  //remove_post_type_support("post","comments"); //Remove Comments Support
  //remove_post_type_support("post","trackbacks"); //Remove trackbacks Support
  //remove_post_type_support("post","editor"); //Remove Editor Support
  //remove_post_type_support("post","custom-fields"); //Remove custom-fields Support
  //remove_post_type_support("post","title"); //Remove Title Support

  
  /* These remove meta boxes from PAGES */
  //remove_post_type_support("page","revisions"); //Remove Revision Support
  //remove_post_type_support("page","comments"); //Remove Comments Support
  //remove_post_type_support("page","author"); //Remove Author Support
  //remove_post_type_support("page","trackbacks"); //Remove trackbacks Support
  //remove_post_type_support("page","custom-fields"); //Remove custom-fields Support
  
}
add_action('admin_init','customize_meta_boxes');

/**
 * This theme uses wp_nav_menus() for the header menu, utility menu and footer menu.
 */
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'themename' )
) );

/** 
 * Add default posts and comments RSS feed links to head
 */
add_theme_support( 'automatic-feed-links' );

/**
 * This theme uses post thumbnails
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'p1', 640, 200, true );

/**
 *	This theme supports editor styles
 */

add_editor_style("/css/layout-style.css");

/**
 * Disable the admin bar in 3.1
 */
//show_admin_bar( false );

/**
 * This enables post formats. If you use this, make sure to delete any that you aren't going to use.
 */
//add_theme_support( 'post-formats', array( 'aside', 'audio', 'image', 'video', 'gallery', 'chat', 'link', 'quote', 'status' ) );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function handcraftedwp_widgets_init() {
    register_sidebar(array(  
        'name' => 'Default Sidebar',  
        'id'   => 'sidebar',  
        'description'   => 'Default Sidebar Widget',  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h4 class="widgettitle">',  
        'after_title'   => '</h4>'  
    ));
	
	register_sidebar(array(  
        'name' => 'Footer Left',  
        'id'   => 'footer_left',  
        'description'   => 'Footer Left Widget',  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h4 class="widgettitle">',  
        'after_title'   => '</h4>'  
    ));
	register_sidebar(array(  
        'name' => 'Footer Center Left',  
        'id'   => 'footer_center_left',  
        'description'   => 'Footer Center Left Widget',  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h4 class="widgettitle">',  
        'after_title'   => '</h4>'  
    ));
	register_sidebar(array(  
        'name' => 'Footer Center Right',  
        'id'   => 'footer_center_right',  
        'description'   => 'Footer Center Right Widget',  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h4 class="widgettitle">',  
        'after_title'   => '</h4>'  
    ));
	register_sidebar(array(  
        'name' => 'Footer Right',  
        'id'   => 'footer_right',  
        'description'   => 'Footer Right Widget',  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h4 class="widgettitle">',  
        'after_title'   => '</h4>'  
    ));
	
}
add_action( 'init', 'handcraftedwp_widgets_init' );

/*
 * Remove senseless dashboard widgets for non-admins. (Un)Comment or delete as you wish.
 */
function remove_dashboard_widgets() {
	global $wp_meta_boxes;

	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // Plugins widget
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPress Blog widget
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // Other WordPress News widget
	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // Right Now widget
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // Quick Press widget
	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // Incoming Links widget
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // Recent Drafts widget
	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Recent Comments widget
}

/**
 *	Hide Menu Items in Admin
 */
function themename_configure_dashboard_menu() {
	global $menu,$submenu;

	global $current_user;
	get_currentuserinfo();

		// $menu and $submenu will return all menu and submenu list in admin panel
		
		// $menu[2] = ""; // Dashboard
		// $menu[5] = ""; // Posts
		// $menu[15] = ""; // Links
		// $menu[25] = ""; // Comments
		// $menu[65] = ""; // Plugins

		// unset($submenu['themes.php'][5]); // Themes
		// unset($submenu['themes.php'][12]); // Editor
}


// For non-admins, add action to Hide Dashboard Widgets and Admin Menu Items you just set above
// Don't forget to comment out the admin check to see that changes :)
if (!current_user_can('manage_options')) {
	add_action('wp_dashboard_setup', 'remove_dashboard_widgets'); // Add action to hide dashboard widgets
	add_action('admin_head', 'themename_configure_dashboard_menu'); // Add action to hide admin menu items
}


// Adding Variable Excerpt Length
function folio_excerpt_length($length) {
    return 80;
}
function folio_excerpt_more($more) {
	return ' ... <span class="excerpt_more"><a href="'.get_permalink().'">Read more</a></span>';
}
function folio_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}



// Adding paragraph tag to more link
function add_p_tag($link){
	return "<p>$link</p>";
}
add_filter('the_content_more_link', 'add_p_tag');



// Remove more jump
function remove_more_jump_link($link) { 
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = substr_replace($link, '', $offset, $end-$offset);
}
return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');





function remove_x_pingback($headers) {
    unset($headers['X-Pingback']);
    return $headers;
}
add_filter('wp_headers', 'remove_x_pingback');


if(function_exists('acf_add_options_page')) { 
 
	acf_add_options_page();
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Body');
	acf_add_options_sub_page('Footer');
 
}

/////// CUSTOM LOGIN PAGE ////////
function custom_login_css() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/login/login-styles.css" />';
}
add_action('login_head', 'custom_login_css');

function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return '';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );





/////// ADMIN FAVICON ////////
function add_favicon() {
$favicon_url = get_stylesheet_directory_uri() . '/images/admin-favicon.ico';
echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');




/////// EXCERPT - READ MORE ////////
function new_excerpt_more($more) {
       global $post;
	return ' [...]</p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/////// COMMENT FORM FIELDS - PLACEHOLDER TEXT ////////
function my_update_fields($fields) {

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields['author'] = 
		'<p class="comment-form-author">
			<input required minlength="3" maxlength="30" placeholder="Your name *" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' />
    	</p>';


    $fields['email'] = 
    	'<p class="comment-form-email">
    		<input required placeholder="Email address *" id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' />
    	</p>';

	$fields['url'] = 
		'<p class="comment-form-url">
			<input placeholder="Your URL" id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" />
    	</p>';

	return $fields;
}

add_filter('comment_form_default_fields','my_update_fields');

function my_update_comment_field($comment_field) {

	$comment_field = 
		'<p class="comment-form-comment">
			<textarea required placeholder="Enter your comment…" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
		</p>';

	return $comment_field;
}
add_filter('comment_form_field_comment','my_update_comment_field');




//REMOVE EMAIL FIELD FROM COMMENTS FORM///////
function remove_comment_fields($fields) {
    unset($fields['email']);
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_comment_fields');






/////// ADD PLACEHOLDER FIELD TO GRAVITY FORMS ////////
/* Add a custom field to the field editor */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);
function my_standard_settings($position, $form_id){
// Create settings on position 25 (right after Field Label)
if($position == 25){
?>
<li class="admin_label_setting field_setting" style="display: list-item; ">
<label for="field_placeholder">Placeholder Text
<!-- Tooltip to help users understand what this field does -->
<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>
</label>
<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
</li>
<?php } }
/* Now we execute some javascript technicalitites for the field to load correctly */
add_action("gform_editor_js", "my_gform_editor_js");
function my_gform_editor_js(){
?>
<script>
//binding to the load field settings event to initialize the checkbox
jQuery(document).bind("gform_load_field_settings", function(event, field, form){
jQuery("#field_placeholder").val(field["placeholder"]);
});
</script>
<?php }
/* We use jQuery to read the placeholder value and inject it to its field */
add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);
function my_gform_enqueue_scripts($form, $is_ajax=false){
?>
<script>
jQuery(function(){
<?php
/* Go through each one of the form fields */
foreach($form['fields'] as $i=>$field){
/* Check if the field has an assigned placeholder */
if(isset($field['placeholder']) && !empty($field['placeholder'])){
/* If a placeholder text exists, inject it as a new property to the field using jQuery */
?>jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');
<?php } } ?>
});
</script>
<?php }





///////Custom Maintenance Lockdown page for non-admins////////
function activate_maintenance_mode() {
    if ( !( current_user_can( 'edit_posts' ) )) {
        header('Location: /maintenance.php');
    }
}
//add_action('get_header', 'activate_maintenance_mode');





//EMAIL OBFUSCATION
function HTHideMail($atts , $content = null ){
	if ( ! is_email ($content) )
		return;
	return '<a href="mailto:'.antispambot($content).'">'.antispambot($content).'</a>';
}
//USE THIS WAY ON THE PAGE:
//[mailto]info@address.com[/mailto]
add_shortcode('mailto', 'HTHideMail');





//PAGINATION
function cloudstrap_pagination($before = '', $after = '') {
	global $wpdb, $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
		
	echo $before.'<ul class="pagination clearfix">'."";
	if ($paged > 1) {
		$first_page_text = "&laquo";
		echo '<li class="prev"><a href="'.get_pagenum_link().'" title="First">'.$first_page_text.'</a></li>';
	}
		
	echo '<li class="">';
	previous_posts_link('&larr; Previous');
	echo '</li>';
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="active"><a href="#">'.$i.'</a></li>';
		} else {
			echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="">';
	next_posts_link('Next &rarr;');
	echo '</li>';
	if ($end_page < $max_page) {
		$last_page_text = "&raquo;";
		echo '<li class="next"><a href="'.get_pagenum_link($max_page).'" title="Last">'.$last_page_text.'</a></li>';
	}
	echo '</ul>'.$after."";

}


function my_page_columns($columns)
{
	$columns = array(
		'cb'	 	=> '',
		'title' 	=> 'Title',
		'homepage' 	=> 'Homepage',
		'date'		=>	'Date',
		'wpseo-score'		=>	'SEO',
		'wpseo-title'		=>	'SEO Title',
		'wpseo-metadesc'		=>	'Meta Desc.',
		'wpseo-focuskw'		=>	'Focus KW',		
	);
	return $columns;
}


function my_custom_columns($column)
{
	global $post;
	if($column == 'homepage')
	{
		if(get_field('featured_client'))
		{
			echo 'Yes';
		}
		else
		{
			echo 'No';
		}
	}
}

add_action("manage_posts_custom_column", "my_custom_columns");
add_filter("manage_edit-client_columns", "my_page_columns");



add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
	// Add file extension 'extension' with mime type 'mime/type'
	$existing_mimes['extension'] = 'mime/type';
	// add as many as you like e.g. 
	$existing_mimes['svg'] = 'image/svg+xml';
	return $existing_mimes;
}






//SET THE COOKIES FOR ONBOARDIFY
add_action( 'init', 'my_setcookie' );
function my_setcookie() {
	if( $_REQUEST['obAccount'] && $_REQUEST['obEmail'] && $_REQUEST['obFname'] && $_REQUEST['obLname'] ) :
		$expire = time() + (86400 * 365); //365 days from now
		setcookie( 'obOrg', 'AgilData', $expire, COOKIEPATH, COOKIE_DOMAIN );
		setcookie( 'obAccount', urldecode($_REQUEST['obAccount']), $expire, COOKIEPATH, COOKIE_DOMAIN );
		setrawcookie( 'obEmail', urldecode($_REQUEST['obEmail']), $expire, COOKIEPATH, COOKIE_DOMAIN );
		setcookie( 'obFname', urldecode($_REQUEST['obFname']), $expire, COOKIEPATH, COOKIE_DOMAIN );
		setcookie( 'obLname', urldecode($_REQUEST['obLname']), $expire, COOKIEPATH, COOKIE_DOMAIN );
	endif;
}




//obAccount={Company:5}&obEmail={Email Address:3}&obFname={First Name:1}&obLname={Last Name:2}




?>