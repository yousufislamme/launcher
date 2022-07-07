<?php
function launcher_setup() {
	load_theme_textdomain( 'launcher' );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
	add_theme_support( "custom-logo" );
	add_theme_support( "custom-background" );

}

add_action( "after_setup_theme", "launcher_setup" );

function assets() {

//	echo basename( get_page_template() );
//	die();

//  all template conditions
    if ( is_page() ) {
		$launcher_template_name = basename( get_page_template() );
		if ( $launcher_template_name == "launcher.php") {
			wp_enqueue_style( "font", "//fonts.googleapis.com/css?family=Open+Sans:400,700,800" );
			wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.css" ) );
			wp_enqueue_style( "icomoon-css", get_theme_file_uri( "/assets/css/icomoon.css" ) );
			wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.css" ) );
			wp_enqueue_style( "yo", get_theme_file_uri( "/assets/css/yo.css" ) );
			wp_enqueue_style( "main-style", get_theme_file_uri( "/assets/css/style.css" ) );
			wp_enqueue_style( get_stylesheet_uri() );


			wp_enqueue_script( "jquery", get_theme_file_uri( "/assets/js/jquery.min.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "jquery-easing", get_theme_file_uri( "/assets/js/jquery.easing.1.3.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "bootstrap", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "jquery-waypoints", get_theme_file_uri( "/assets/js/jquery.waypoints.min.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "waypoints", get_theme_file_uri( "/assets/js/simplyCountdown.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "modernizr", get_theme_file_uri( "/assets/js/modernizr-2.6.2.min.js" ), array( "jquery" ), null, false );
			wp_enqueue_script( "respond-min-js", get_theme_file_uri( "/assets/js/respond.min.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/main.js" ), array( "jquery" ), null, true );
		}else {
			wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.css" ) );
			wp_enqueue_style( "yousuf", get_theme_file_uri( "/assets/css/yousuf.css" ) );
			wp_enqueue_style( get_stylesheet_uri() );
			wp_enqueue_script( "bootstrap", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), null, true );


		}
	}

//    yo template
    if (is_page()){
        $launcher_yo_template = basename(get_page_template());
        if ($launcher_yo_template == "yo.php"){
	        wp_enqueue_style( "yo", get_theme_file_uri( "/assets/css/yo.css" ) );


        }
    }

}

add_action( "wp_enqueue_scripts", "assets" );

function launcher_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'footer left', 'launcher' ),
			'id'            => "footer-left",
			'description'   => __( 'footer-left', 'launcher' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => "</li>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'footer right', 'launcher' ),
			'id'            => "footer-right",
			'description'   => __( 'footer-right', 'launcher' ),
			'before_widget' => '<li id="%1$s" class="text-right widget %2$s">',
			'after_widget'  => "</li>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		)
	);
}

add_action( "widgets_init", "launcher_sidebar" );

function launcher_style() {
	if ( is_page() ) {
		$thumbnail_url = get_the_post_thumbnail_url( null, "large" );
		?>
        <style>
            .bg-image {
                background-image: url("<?php echo $thumbnail_url;?>");
            }
        </style>
		<?php
	}

}

add_action( "wp_head", "launcher_style" );



