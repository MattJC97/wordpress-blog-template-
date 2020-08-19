<?function get_setup(){

// styles
 wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
 wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
wp_enqueue_style('style', get_stylesheet_uri(),NULL,microtime(),'all');

// scripts
wp_enqueue_script( 'main', get_template_directory_uri() .'/js/main.js', array ( 'jquery' ), '', true);
  wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
  wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
  wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );

  function add_aos_animation() {
      wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
      wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
      wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js', array( 'AOS' ), null, true);
  }
}

add_action('wp_enqueue_scripts','get_setup');

add_action( 'wp_enqueue_scripts', 'add_aos_animation' );

// this adds the theme support

function theme_init(){
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

}

add_action('after_setup_theme','theme_init');