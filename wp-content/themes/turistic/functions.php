<?php 

    add_action('wp_enqueue_scripts', 'myscripts');

    function myscripts(){
        wp_enqueue_style('libs', get_stylesheet_directory_uri() . '/css/libs.min.css', array(), null);
        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), time());
        wp_enqueue_style('media', get_stylesheet_directory_uri() . '/css/media.css', array(), null);

        wp_enqueue_script('jquery');
        wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', 'jquery', null, true);
    };

    register_nav_menus( [
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
    ] );
    

    function true_register_wp_sidebars() {
 
      /* В боковой колонке - первый сайдбар */
      register_sidebar(
        array(
          'id' => 'true_side', // уникальный id
          'name' => 'Боковая колонка', // название сайдбара
          'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
          'before_widget' => '<div id="%1$s" class="sidebar__sidebar-item">', // по умолчанию виджеты выводятся <li>-списком
          'after_widget' => '</div>',
          'before_title' => '<div class="sidebar-item__title">', // по умолчанию заголовки виджетов в <h2>
          'after_title' => '</div>'
        )
      );

    }
     
    add_action( 'widgets_init', 'true_register_wp_sidebars' );

    add_theme_support('post-thumbnails');

    add_image_size('posts', 270, 190, true);

    // add_filter('widget_tag_cloud_args','set_tag_cloud_args');
    // function set_tag_cloud_args( $args ) {
    //   // $args['number'] = 30;
    //   // $args['largest'] = 18;
    //   // $args['smallest'] = 11;
    //   // $args['unit'] = 'px';
    //   $args['format'] = 'list';
    //   return $args;
    // }

?>