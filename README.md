# I am working on launcher theme
## I am add jsut link show only invided page
- easily deside 
- CSS File
- JS File

```
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
```

![preview img](/preview.png)
