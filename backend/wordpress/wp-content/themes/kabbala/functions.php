<?php
function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
}
add_action('init','add_cors_http_header');

add_action( 'customize_register', function ( $customizer ) {
    $customizer->add_section(
        'dop_setting',
        array(
            'title'    => 'Настройки сайта',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'f_phone',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'f_phone',
        array(
            'label'   => 'Телефон 1',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        's_phone',
        array( 'default' => '' )
    );
    $customizer->add_control(
        's_phone',
        array(
            'label'   => 'Телефон 2',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'fax',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'fax',
        array(
            'label'   => 'Факс',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'email',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'email',
        array(
            'label'   => 'Primary Email',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'youtube',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'youtube',
        array(
            'label'   => 'Youtube',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'vkontakte',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'vkontakte',
        array(
            'label'   => 'VK',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'telegram',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'telegram',
        array(
            'label'   => 'Telegram',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'facebook',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'facebook',
        array(
            'label'   => 'Facebook',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'whatsapp',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'whatsapp',
        array(
            'label'   => 'WhatsApp',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'instagram',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'instagram',
        array(
            'label'   => 'Instagram',
            'section' => 'dop_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_section(
        'tv_setting',
        array(
            'title'    => 'Настройки страницы ТВ',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'tv_top_link_text',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'tv_top_link_text',
        array(
            'label'   => 'Текст ссылки',
            'section' => 'tv_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'tv_top_link_url',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'tv_top_link_url',
        array(
            'label'   => 'URL',
            'section' => 'tv_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'tv_top_title',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'tv_top_title',
        array(
            'label'   => 'Заголовок',
            'section' => 'tv_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'tv_top_text',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'tv_top_text',
        array(
            'label'   => 'Описание',
            'section' => 'tv_setting',
            'type'    => 'textarea',
        )
    );
    $customizer->add_setting(
        'youtube_link_url',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'youtube_link_url',
        array(
            'label'   => 'Youtube URL',
            'section' => 'tv_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'youtube_link_text',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'youtube_link_text',
        array(
            'label'   => 'Youtube текст ссылки',
            'section' => 'tv_setting',
            'type'    => 'text',
        )
    );
    $customizer->add_setting(
        'tv_vstup_text',
        array( 'default' => '' )
    );
    $customizer->add_control(
        'tv_vstup_text',
        array(
            'label'   => 'Вступ текст (моб.версия)',
            'section' => 'tv_setting',
            'type'    => 'textarea',
        )
    );
} );
function mbCutString( $str, $length, $postfix = '...', $encoding = 'UTF-8' ) {
    if ( mb_strlen( $str, $encoding ) <= $length ) {
        return $str;
    }

    $tmp = mb_substr( $str, 0, $length, $encoding );

    return mb_substr( $tmp, 0, mb_strripos( $tmp, ' ', 0, $encoding ), $encoding ) . $postfix;
}

add_theme_support( 'category-thumbnails' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-fixed-event', 896, 391, true );
add_image_size( 'thumb-event', 224, 168, true );
add_image_size( 'teachers_thumb', 224, 224, true );
add_image_size( 'thumb-gallery-event', 84, 55, true );
add_image_size( 'thumb-user', 80, 80, true );
add_image_size( 'tv-prev', 224, 126, true );
add_image_size( '13veshey', 168, 242, true );
add_image_size( 'next_vebinar', 336, 189, true );
add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'kb_custom_post_events' );
function kb_custom_post_events() {
    $labels = array(
        'name'               => __( 'События' ),
        'singular_name'      => __( 'Событие' ),
        'add_new'            => __( 'Добавить событие' ),
        'add_new_item'       => __( 'Добавить событие' ),
        'edit_item'          => __( 'Редактировать событие' ),
        'new_item'           => __( 'Новое событие' ),
        'all_items'          => __( 'Все события' ),
        'search_items'       => __( 'Найти событие' ),
        'featured_image'     => 'Изображение события',
        'set_featured_image' => 'Добавить изображение события'
    );
    $args   = array(
        'labels'            => $labels,
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'has_archive'       => true,
        'show_in_rest'      => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => 'events'
    );
    register_post_type( 'events', $args );
    register_taxonomy( 'categories_ev', array( 'events' ), array(
            'hierarchical'   => true,
            'label'          => 'Категории',
            'show_in_rest'   => true,
            'singular_label' => 'Категория',
            'rewrite'        => array( 'slug' => 'categories_ev', 'with_front' => false )
        )
    );
    register_taxonomy_for_object_type( 'categories_ev', 'events' );
}

//add_action( 'init', 'kb_custom_post_info' );
//function kb_custom_post_info() {
//    $labels = array(
//        'name'               => __( 'Инфо' ),
//        'singular_name'      => __( 'Инфо' ),
//    );
//    $args   = array(
//        'labels'            => $labels,
//        'public'            => true,
//        'menu_position'     => 5,
//        'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
//        'has_archive'       => true,
//        'show_in_rest'      => true,
//        'show_in_admin_bar' => true,
//        'show_in_nav_menus' => true,
//        'query_var'         => 'events'
//    );
//    register_post_type( 'info', $args );
//    register_taxonomy( 'categories_info', array( 'info' ), array(
//            'hierarchical'   => true,
//            'label'          => 'Категории',
//            'show_in_rest'   => true,
//            'singular_label' => 'Категория',
//            'rewrite'        => array( 'slug' => 'categories_info', 'with_front' => false )
//        )
//    );
//    register_taxonomy_for_object_type( 'categories_info', 'info' );
//}

add_action( 'init', 'kb_custom_post_tv' );
function kb_custom_post_tv() {
    $labels = array(
        'name'               => __( 'ТВ' ),
        'singular_name'      => __( 'ТВ' ),
        'add_new'            => __( 'Добавить ТВ' ),
        'add_new_item'       => __( 'Добавить ТВ' ),
        'edit_item'          => __( 'Редактировать ТВ' ),
        'new_item'           => __( 'Новое ТВ' ),
        'all_items'          => __( 'Все ТВ' ),
        'search_items'       => __( 'Найти ТВ' ),
        'featured_image'     => 'Превью ТВ',
        'set_featured_image' => 'Добавить превью события'
    );
    $args   = array(
        'labels'            => $labels,
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'has_archive'       => true,
        'show_in_rest'      => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => 'tv'
    );
    register_post_type( 'tv', $args );
    register_taxonomy( 'categories_tv', array( 'tv' ), array(
            'hierarchical'   => true,
            'label'          => 'Категории',
            'show_in_rest'   => true,
            'singular_label' => 'Категория',
            'rewrite'        => array( 'slug' => 'categories_tv', 'with_front' => false )
        )
    );
    register_taxonomy_for_object_type( 'categories_tv', 'tv' );
}

add_action( 'init', 'kb_custom_post_photogallery' );
function kb_custom_post_photogallery() {
    $labels = array(
        'name'               => __( 'Фотогалерея' ),
        'singular_name'      => __( 'Фотогалерея' ),
        'add_new'            => __( 'Добавить фото' ),
        'add_new_item'       => __( 'Добавить фото' ),
        'edit_item'          => __( 'Редактировать фото' ),
        'new_item'           => __( 'Новое фото' ),
        'all_items'          => __( 'Все фото' ),
        'search_items'       => __( 'Найти фото' ),
        'featured_image'     => 'Фото',
        'set_featured_image' => 'Добавить фото'
    );
    $args   = array(
        'labels'            => $labels,
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'thumbnail' ),
        'has_archive'       => true,
        'show_in_rest'      => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => 'photogallery'
    );
    register_post_type( 'photogallery', $args );
    register_taxonomy( 'categories_photogallery', array( 'photogallery' ), array(
            'hierarchical'   => true,
            'label'          => 'Категории',
            'show_in_rest'   => true,
            'singular_label' => 'Категория',
            'rewrite'        => array( 'slug' => 'categories_photogallery', 'with_front' => false )
        )
    );
    register_taxonomy_for_object_type( 'categories_photogallery', 'photogallery' );
}

add_action( 'init', 'kb_custom_post_13veshey' );
function kb_custom_post_13veshey() {
    $labels = array(
        'name'               => __( '13 вещей (Главная)' ),
        'featured_image'     => 'Изображение',
        'set_featured_image' => 'Добавить изображение'
    );
    $args   = array(
        'labels'            => $labels,
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'has_archive'       => false,
        'show_in_rest'      => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => '13veshey'
    );
    register_post_type( '13veshey', $args );
}

add_action( 'rest_api_init', function () {
    register_rest_route( '/index', '/data', array(
        'methods'  => 'GET',
        'callback' => 'getIndexData',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/events', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getEventsPage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/infos', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getInfosPage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/event', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getEventSingle',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/info', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getInfoSingle',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/teachers', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getTeacherPage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/training', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getTrainingPage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/about', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getAboutPage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/library', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getLibraryPage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/slide', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getVeshiSingle',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/books', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getBookPage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/donate', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getDonatePage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/tv', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getTvsPage',
    ) );
} );
add_action( 'rest_api_init', function () {
    register_rest_route( '/gallery', '/list', array(
        'methods'  => 'GET',
        'callback' => 'getPhotoGalleryPage',
    ) );
} );
function getPagesData(){
    $pages = get_pages();
    $result = [];
    foreach ($pages as $key => $value) {
        $postTitle = (string)$value->post_title;
        $postContent = json_encode($value->post_content);
        $resultByLang[$key] = [
            'page' => $value->ID,
            'title' => $postTitle,
            'content' => $postContent,
        ];
    }
    return $result;
}
function getEventsPage( WP_REST_Request $request ) {
    $events      = getEvents( $_GET["offset"], $_GET["limit"], $_GET["cat"], $_GET["page"] );
    $cats        = getEventsCategories();
    $nextVebinar = getDateVebinar();
    $result      = [
        'events'      => $events,
        'cats'        => $cats,
        'nextVebinar' => $nextVebinar
    ];

    return json_encode( $result );
}
function getInfosPage( WP_REST_Request $request ) {
    $infos      = getInfos( $_GET["offset"], $_GET["limit"], $_GET["cat"], $_GET["page"] );
    $cats        = getInfosCategories();
    $nextVebinar = getDateVebinar();
    $result      = [
        'infos'      => $infos,
        'cats'        => $cats,
        'nextVebinar' => $nextVebinar
    ];

    return json_encode( $result );
}

function getEventSingle( WP_REST_Request $request ) {
    $event  = getEvent( $_GET["id"] );
    $cats   = getEventsCategories();
    $result = [
        'event' => $event,
        'cats'  => $cats,
    ];

    return json_encode( $result );
}
function getInfoSingle( WP_REST_Request $request ) {
    $info  = getInfo( $_GET["id"] );
    $cats   = getInfosCategories();
    $result = [
        'info' => $info,
        'cats'  => $cats,
    ];

    return json_encode( $result );
}

function getTeacherPage( WP_REST_Request $request ) {
    $teacher = getTeachers();
    $result  = [
        'teachers' => $teacher,
    ];

    return json_encode( $result );
}

function getTrainingPage( WP_REST_Request $request ) {
    $training = getTraining();
    $result   = [
        'training' => $training,
    ];

    return json_encode( $result );
}

function getAboutPage( WP_REST_Request $request ) {
    $about  = getAbout();
    $result = [
        'about' => $about,
    ];

    return json_encode( $result );
}

function getLibraryPage( WP_REST_Request $request ) {
    $library  = getLibrary();
    $result = [
        'library' => $library,
    ];

    return json_encode( $result );
}

function getBookPage( WP_REST_Request $request ) {
    $book   = getBook();
    $result = [
        'books' => $book,
    ];

    return json_encode( $result );
}

function getDonatePage( WP_REST_Request $request ) {
    $donate = getDonate();
    $result = [
        'donate' => $donate,
    ];

    return json_encode( $result );
}

function getVeshiSingle( WP_REST_Request $request ) {
    $veshey = getVesh( $_GET["id"] );
    $result = [
        'info' => $veshey,
    ];

    return json_encode( $result );
}

function getTvsPage( WP_REST_Request $request ) {
    $tvs         = getTvs( $_GET["offset"], $_GET["limit"], $_GET["cat"], $_GET["page"] );
    $cats        = getTvsCategories();
    $nextVebinar = getDateVebinar();
    $result      = [
        'tvs'         => $tvs,
        'cats'        => $cats,
        'nextVebinar' => $nextVebinar
    ];

    return json_encode( $result );
}

function getPhotoGalleryPage( WP_REST_Request $request ) {
    $photos = getPhotoGallery( $_GET["offset"], $_GET["limit"], $_GET["cat"], $_GET["page"] );
    $cats   = getPhotoGalleryCategories();
    $result = [
        'photos' => $photos,
        'cats'   => $cats,
    ];

    return json_encode( $result );
}

function getEventsCategories() {
    $categories = get_terms( [
        'orderby'    => 'id',
        'order'      => 'ACS',
        'taxonomy'   => 'categories_ev',
        'hide_empty' => false,
    ] );
    $result     = [];
    foreach ( $categories as $key => $item ) {
        $result[] = (object) [ 'name' => $item->name, 'slug' => $item->term_id, 'id' => $item->slug ];
    }

    return $result;
}

function getInfosCategories() {
    $categories = get_terms( [
        'orderby'    => 'id',
        'order'      => 'ACS',
        'taxonomy'   => 'category',
        'hide_empty' => false,
    ] );
    $result     = [];
    foreach ( $categories as $key => $item ) {
        $result[] = (object) [ 'name' => $item->name, 'slug' => $item->term_id, 'id' => $item->slug ];
    }

    return $result;
}

function getTvsCategories() {
    $categories = get_terms( [
        'orderby'    => 'id',
        'order'      => 'ACS',
        'taxonomy'   => 'categories_tv',
        'hide_empty' => false,
    ] );
    $result     = [];
    foreach ( $categories as $key => $item ) {
        $result[] = (object) [ 'name' => $item->name, 'slug' => $item->term_id, 'id' => $item->slug ];
    }

    return $result;
}

function getPhotoGalleryCategories() {
    $categories = get_terms( [
        'orderby'    => 'id',
        'order'      => 'ACS',
        'taxonomy'   => 'categories_photogallery',
        'hide_empty' => false,
    ] );
    $result     = [];
    foreach ( $categories as $key => $item ) {
        $result[] = (object) [ 'name' => $item->name, 'slug' => $item->term_id, 'id' => $item->slug ];
    }

    return $result;
}

function getEvents( $offset = 0, $limit = 10, $cat = '', $page = 1 ) {
    global $wp_query;
    $tax_query            = [];
    $count_posts          = wp_count_posts( 'events' );
    $published_post_count = $count_posts->publish;
    $total_pages          = ceil( $published_post_count / $limit );
    if ( $cat ) {
        $tax_query = array(
            array(
                'taxonomy' => 'categories_ev',
                'field'    => 'slug',
                'terms'    => $cat,
            )
        );
    }
    $args            = array(
        'paged'          => $page,
        'post_type'      => 'events',
        'posts_per_page' => $limit,
        'offset'         => $offset,
        'status'         => 'publish',
        'tax_query'      => $tax_query
    );
    $events          = get_posts( $args );
    $result          = [];
    $total_cat_posts = null;
    $total_cat_pages = null;
    foreach ( $events as $key => $event ) {
        if ( $cat !== '' ) {
            $categories = get_the_terms( $event->ID, 'categories_ev' );
            foreach ( $categories as $item ) {
                if ( $item->slug === $cat ) {
                    $total_cat_posts = $item->count;
                    $total_cat_pages = ceil( $total_cat_posts / $limit );
                }
            }
        }
        $title = (string) $event->post_title;
//		$img = get_field('image', $event->ID);
        $img = get_the_post_thumbnail_url( $event->ID, 'full' );
        $month_num = null;
        $started = null;
        $event_filter = null;
        if ( get_field( 'nachalo', $event->ID ) ) {
            $month = get_field( 'mesyacz', $event->ID );
            $month_num = $month['value'];
            $started=get_field( 'nachalo', $event->ID );
            $ended = get_field( 'zavershenie', $event->ID );
            $event_filter = date("Y").'-'.$month_num.'-'.$started;
            if($ended > 0) {
                $eventDate = (string) get_field( 'nachalo', $event->ID ) . '-' . $ended . ' ' . $month['label'] . ' '. date("Y");
            } else {
                $eventDate = (string) get_field( 'nachalo', $event->ID ) . ' ' . $month['label'] . ' '. date("Y");
            }
        } else {
            $eventDate = false;
        }
        if ( get_field( 'zakrepit', $event->ID ) == 1 ) {
            $fixedPost = true;
            $prevImg   = get_the_post_thumbnail_url( $event->ID, 'thumb-fixed-event' );
        } else {
            $fixedPost = false;
            $prevImg   = get_the_post_thumbnail_url( $event->ID, 'thumb-event' );
        }
        $postContent = $event->post_content;
        if ( get_the_excerpt( $event->ID ) ) {
            $excerpt = wpautop( mbCutString( get_the_excerpt( $event->ID ), 196 ) );
        } else {
            $excerpt = false;
        }
        $postDate = get_the_date( '', $event->ID );
        if ( get_field( 'vyberite_izobrazheniya', $event->ID ) ) {
            $gallery = get_field( 'vyberite_izobrazheniya', $event->ID );
        } else {
            $gallery = false;
        }
        $correct_art = [
            'fixed'       => $fixedPost,
            'id'          => $event->ID,
            'title'       => $title,
            'excerpt'     => $excerpt,
//			'content'     => $postContent,
//			'postDate'    => $postDate,
			'eventFilter'    => $event_filter,
            'eventDate'   => $eventDate,
//            'monthNum'   => $month_num,
//			'img'         => $img,
            'prevImg'     => $prevImg,
            'gallery'     => $gallery,
            'category'    => $cat !== '' ? $cat : '',
            'totalPosts'  => $cat !== '' ? $total_cat_posts : $published_post_count,
            'totalPages'  => $cat !== '' ? $total_cat_pages : $total_pages,
            'currentPage' => $page > 0 ? $page : 1,
        ];
        array_push( $result, $correct_art );
    }

    return $result;
}

function getInfos( $offset = 0, $limit = 10, $cat = '', $page = 1 ) {
    global $wp_query;
    $tax_query            = [];
    $count_posts          = wp_count_posts(  );
    $published_post_count = $count_posts->publish;
    $total_pages          = ceil( $published_post_count / $limit );
    if ( $cat ) {
        $tax_query = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $cat,
            )
        );
    }
    $args            = array(
        'paged'          => $page,
        'post_type'      => 'post',
        'posts_per_page' => $limit,
        'offset'         => $offset,
        'status'         => 'publish',
        'tax_query'      => $tax_query
    );
    $infos          = get_posts( $args );
    $result          = [];
    $total_cat_posts = null;
    $total_cat_pages = null;
    foreach ( $infos as $key => $info ) {
        if ( $cat !== '' ) {
            $categories = get_the_terms( $info->ID, 'category' );
            foreach ( $categories as $item ) {
                if ( $item->slug === $cat ) {
                    $total_cat_posts = $item->count;
                    $total_cat_pages = ceil( $total_cat_posts / $limit );
                }
            }
        }
        $title = (string) $info->post_title;
        if ( get_the_excerpt( $info->ID ) ) {
            $excerpt = wpautop( mbCutString( get_the_excerpt( $info->ID ), 196 ) );
        } else {
            $excerpt = false;
        }
        $prevImg   = get_the_post_thumbnail_url( $info->ID, 'thumb-event' );
        $correct_art = [
            'id'          => $info->ID,
            'title'       => $title,
            'excerpt'     => $excerpt,
//			'content'     => $postContent,
//			'postDate'    => $postDate,
//            'monthNum'   => $month_num,
//			'img'         => $img,
            'prevImg'     => $prevImg,
            'category'    => $cat !== '' ? $cat : '',
            'totalPosts'  => $cat !== '' ? $total_cat_posts : $published_post_count,
            'totalPages'  => $cat !== '' ? $total_cat_pages : $total_pages,
            'currentPage' => $page > 0 ? $page : 1,
        ];
        array_push( $result, $correct_art );
    }

    return $result;
}

function getEvent( $id ) {
    global $wp_query;
    $event  = get_post( $id );
    $result = [];
//	$categories = get_the_terms( $event->ID, 'categories' );
//	foreach ( $categories as $item ) {
//		$cat = $item->slug;
//	}
    $title = (string) $event->post_title;
//		$img = get_field('image', $event->ID);
    $img = get_the_post_thumbnail_url( $event->ID, 'full' );
    if ( get_field( 'nachalo', $event->ID ) ) {
        $eventDate = (string) get_field( 'nachalo', $event->ID ) . '-' . get_field( 'zavershenie', $event->ID ) . ' ' . get_field( 'mesyacz', $event->ID ) . ' 2020';
    } else {
        $eventDate = false;
    }
    if ( get_field( 'zakrepit', $event->ID ) == 1 ) {
        $fixedPost = true;
        $prevImg   = get_the_post_thumbnail_url( $event->ID, 'thumb-fixed-event' );
    } else {
        $fixedPost = false;
        $prevImg   = get_the_post_thumbnail_url( $event->ID, 'thumb-event' );
    }
    $postContent = $event->post_content;
    if ( get_the_excerpt( $event->ID ) ) {
        $excerpt = wpautop( mbCutString( get_the_excerpt( $event->ID ), 196 ) );
    } else {
        $excerpt = false;
    }
    $postDate = get_the_date( '', $event->ID );
    if ( get_field( 'vyberite_izobrazheniya', $event->ID ) ) {
        $gallery = get_field( 'vyberite_izobrazheniya', $event->ID );
    } else {
        $gallery = false;
    }
    $result = [
        'fixed'     => $fixedPost,
        'id'        => $event->ID,
        'title'     => $title,
        'excerpt'   => $excerpt,
        'content'   => $postContent,
        'postDate'  => $postDate,
        'eventDate' => $eventDate,
        'img'       => $img,
        'prevImg'   => $prevImg,
        'gallery'   => $gallery,
//		'category'  => $cat || '',
    ];

//		array_push( $result, $correct_art );
    return $result;
}
function getInfo( $id ) {
    global $wp_query;
    $event  = get_post( $id );
    $result = [];
    $title = (string) $event->post_title;
    $img = get_the_post_thumbnail_url( $event->ID, 'full' );

    $postContent = $event->post_content;
    $result = [
        'id'        => $event->ID,
        'title'     => $title,
        'content'   => $postContent,
        'img'       => $img,
//		'category'  => $cat || '',
    ];

//		array_push( $result, $correct_art );
    return $result;
}

function getVesh( $id ) {
    global $post;
    $post = get_post( $id );
//    $info  = get_post( $id );
    $result = [];
    $title       = (string) $post->post_title;
    $postContent = $post->post_content;
    $correct_art = [
        'id'      => $post->ID,
        'title'   => $title,
        'content' => $postContent,
//        'prevPost' => $post,
    ];
    array_push( $result, $correct_art );
    return $result;
}
function getTeachers() {
    global $wp_query;
    $teacher_page     = get_post( 76 );
    $result           = [];
    $title            = (string) $teacher_page->post_title;
    $teachers_columns = [];
    $teachers_fw      = [];
    $img              = get_the_post_thumbnail_url( $teacher_page->ID, 'full' );
    $count1 = 0;
    $count2 = 0;
    $vstup_text       = get_field( 'vstupitelnyj_tekst', $teacher_page->ID );
    if ( have_rows( 'prepodavateli_v_2_kolonki', $teacher_page->ID ) ) :
        while ( have_rows( 'prepodavateli_v_2_kolonki', $teacher_page->ID ) ) : the_row();
            $count1++;
            $foto             = get_sub_field( 'foto', $teacher_page->ID );
            $teachers2columns = [
                'photo'       => wp_get_attachment_image_url( $foto, 'teachers_thumb' ),
                'name'        => get_sub_field( 'imya_familiya', $teacher_page->ID ),
                'description' => get_sub_field( 'opisanie', $teacher_page->ID ),
            ];
            array_push( $teachers_columns, $teachers2columns );
        endwhile;
    endif;
    if ( have_rows( 'prepodavateli_full_width', $teacher_page->ID ) ) :
        while ( have_rows( 'prepodavateli_full_width', $teacher_page->ID ) ) : the_row();
            $count2++;
            $foto       = get_sub_field( 'foto', $teacher_page->ID );
            $teachersfw = [
                'photo'       => wp_get_attachment_image_url( $foto, 'teachers_thumb' ),
                'name'        => get_sub_field( 'imya_familiya', $teacher_page->ID ),
                'description' => get_sub_field( 'opisanie', $teacher_page->ID ),
            ];
            array_push( $teachers_fw, $teachersfw );
        endwhile;
    endif;
    $correct_art = [
        'title'           => $title,
        'vstupText'       => $vstup_text,
        'img'             => $img,
        'teachersColumns' => $teachers_columns,
        'teachersFw'      => $teachers_fw,
        'total'      => $count1+$count2,
    ];
    array_push( $result, $correct_art );

    return $result;
}

function getTraining() {
    global $wp_query;
    $trainig_page = get_post( 104 );
    $result       = [];
    $title        = (string) $trainig_page->post_title;
    if ( have_rows( 'verhnij_banner', $trainig_page->ID ) ) :
        while ( have_rows( 'verhnij_banner', $trainig_page->ID ) ) : the_row();
            $top_banner = [
                'img'     => get_sub_field( 'izobrazhenie', $trainig_page->ID ),
                'imgText' => get_sub_field( 'nadpis', $trainig_page->ID ),
            ];
        endwhile;
    endif;
    $left_top_text  = get_field( 'tekst_2_kolonki', $trainig_page->ID );
    $filialy        = get_field( 'filialy', $trainig_page->ID );
    $bottom_banners = [];
    if ( have_rows( 'nizhnie_bannery', $trainig_page->ID ) ) :
        while ( have_rows( 'nizhnie_bannery', $trainig_page->ID ) ) : the_row();
            $banner_item = [
                'img'     => get_sub_field( 'izobrazhenie', $trainig_page->ID ),
                'imgText' => get_sub_field( 'nadpis', $trainig_page->ID ),
                'text'    => get_sub_field( 'tekst', $trainig_page->ID ),
            ];
            array_push( $bottom_banners, $banner_item );
        endwhile;
    endif;
    $correct_art = [
        'title'         => $title,
        'topBanner'     => $top_banner,
        'leftTopText'   => $left_top_text,
        'filialy'       => $filialy,
        'bottomBanners' => $bottom_banners
    ];
    array_push( $result, $correct_art );

    return $result;
}

function getAbout() {
    global $wp_query;
    $about_page  = get_post( 121 );
    $result      = [];
    $title       = (string) $about_page->post_title;
    $postContent = $about_page->post_content;
    if ( get_field( 'vyberite_izobrazheniya', $about_page->ID ) ) {
        $gallery = get_field( 'vyberite_izobrazheniya', $about_page->ID );
    } else {
        $gallery = false;
    }
    $correct_art = [
        'title'   => $title,
        'content' => $postContent,
        'gallery' => $gallery
    ];
    array_push( $result, $correct_art );

    return $result;
}

function getLibrary() {
    global $wp_query;
    $lib_page  = get_post( 385 );
    $result      = [];
    $title       = (string) $lib_page->post_title;
    $menu = [];
    if ( get_field( 'proizvolnoe_menyu', $lib_page->ID ) ):
        while ( have_rows( 'proizvolnoe_menyu' , $lib_page->ID ) ) : the_row();
            $menu_item = [
                'url'     => get_sub_field( 'ssylka', $lib_page->ID ),
                'text' => get_sub_field( 'tekst', $lib_page->ID ),
            ];
            array_push( $menu, $menu_item );
        endwhile;
    endif;
    $rekomend = [];
    if ( get_field( 'rekomenduem_k_prochteniyu', $lib_page->ID ) ):
        while ( have_rows( 'rekomenduem_k_prochteniyu', $lib_page->ID  ) ) : the_row();
            $rekomend_item = [
                'img'     => get_sub_field( 'izobr', $lib_page->ID ),
                'author' => get_sub_field( 'avtor', $lib_page->ID ),
                'title' => get_sub_field( 'zagolovok', $lib_page->ID ),
                'url' => get_sub_field( 'ssylka', $lib_page->ID ),
            ];
            array_push( $rekomend, $rekomend_item );
        endwhile;
    endif;
    $banner = [];
    if ( get_field( 'banner', $lib_page->ID ) ):
        while ( have_rows( 'banner', $lib_page->ID  ) ) : the_row();
            $banner_item = [
                'title'     => get_sub_field( 'zagolovok', $lib_page->ID ),
                'hover' => get_sub_field( 'podskazka', $lib_page->ID ),
                'url' => get_sub_field( 'ssylka', $lib_page->ID ),
            ];
            array_push( $banner, $banner_item );
        endwhile;
    endif;
    $popular = [];
    if ( get_field( 'populyarnye_temy_statej', $lib_page->ID ) ):
        while ( have_rows( 'populyarnye_temy_statej', $lib_page->ID  ) ) : the_row();
            $popular_item = [
                'name'     => get_sub_field( 'nazvanie', $lib_page->ID ),
                'url' => get_sub_field( 'ssylka', $lib_page->ID ),
            ];
            array_push( $popular, $popular_item );
        endwhile;
    endif;
    $last = [];
    if ( get_field( 'poslednie_postupleniya', $lib_page->ID ) ):
        while ( have_rows( 'poslednie_postupleniya', $lib_page->ID  ) ) : the_row();
            $last_item = [
                'img'     => get_sub_field( 'izobr', $lib_page->ID ),
                'author' => get_sub_field( 'avtor', $lib_page->ID ),
                'title' => get_sub_field( 'zagolovok', $lib_page->ID ),
                'url' => get_sub_field( 'ssylka', $lib_page->ID ),
            ];
            array_push( $last, $last_item );
        endwhile;
    endif;

    $result = [
        'title'   => $title,
        'menu'    => $menu,
        'rek'     => $rekomend,
        'banner'  => $banner,
        'popular' => $popular,
        'last' => $last,
    ];
//    array_push( $result, $correct_art );

    return $result;
}

function getBook() {
    global $wp_query;
    $about_page = get_post( 140 );
    $result     = [];
    $title      = (string) $about_page->post_title;
    $new_books  = [];
    if ( have_rows( 'novinki', $about_page->ID ) ) :
        while ( have_rows( 'novinki', $about_page->ID ) ) : the_row();
            $book = [
                'img'   => get_sub_field( 'izobrazhenie', $about_page->ID ),
                'title' => get_sub_field( 'nazvanie', $about_page->ID ),
                'url'   => get_sub_field( 'ssylka', $about_page->ID ),
            ];
            array_push( $new_books, $book );
        endwhile;
    endif;
    $blocks = [];
    if ( have_rows( 'blocks', $about_page->ID ) ) :
        while ( have_rows( 'blocks', $about_page->ID ) ) : the_row();
            $block = [
                'title'       => get_sub_field( 'tekst_ssylki', $about_page->ID ),
                'url'         => get_sub_field( 'ssylka', $about_page->ID ),
                'name'        => get_sub_field( 'nazvanie_im', $about_page->ID ),
                'description' => get_sub_field( 'opisanie', $about_page->ID ),
            ];
            array_push( $blocks, $block );
        endwhile;
    endif;
    $correct_art = [
        'title'    => $title,
        'newBooks' => $new_books,
        'blocks'   => $blocks
    ];
    array_push( $result, $correct_art );

    return $result;
}

function getDonate() {
    global $wp_query;
    $donate_page = get_post( 248 );
    $correct_art = [];
    $title       = (string) $donate_page->post_title;
    $left        = [];
    if ( have_rows( 'blok_sleva', $donate_page->ID ) ) :
        while ( have_rows( 'blok_sleva', $donate_page->ID ) ) : the_row();
            if ( have_rows( 'blok_1' ) ) :
                while ( have_rows( 'blok_1' ) ) : the_row();
                    $item = [
                        'title' => get_sub_field( 'zagolovok', $donate_page->ID ),
                        'text'  => get_sub_field( 'tekst', $donate_page->ID ),
                    ];
                    array_push( $left, $item );
                endwhile;
            endif;
        endwhile;
    endif;
    $right   = [];
    $buttons = [];
    $projects = [];
    if ( have_rows( 'blok_sprava', $donate_page->ID ) ) :
        while ( have_rows( 'blok_sprava', $donate_page->ID ) ) : the_row();
            if ( have_rows( 'knopka_1' ) ) :
                while ( have_rows( 'knopka_1' ) ) : the_row();
                    $btn1 = [
                        'url'  => get_sub_field( 'ssylka', $donate_page->ID ),
                        'text' => get_sub_field( 'tekst', $donate_page->ID ),
                    ];
                    array_push( $buttons, $btn1 );
                endwhile;
            endif;

            if ( have_rows( 'proekty' ) ) :
                while ( have_rows( 'proekty' ) ) : the_row();
                    $project = [
                        'name'  => get_sub_field( 'nazvanie', $donate_page->ID ),
                        'url' => get_sub_field( 'ssylka', $donate_page->ID ),
                        'title' => get_sub_field( 'zagolovok', $donate_page->ID ),
                        'description' => get_sub_field( 'opisanie', $donate_page->ID ),
                        'btnUrl'  => get_sub_field( 'ssylka_b', $donate_page->ID ),
                    ];
                    array_push($projects, $project);
                endwhile;
            endif;
            $block = [
                'buttons'       => $buttons,
                'projects'      => $projects,
            ];
            array_push( $right, $block );
        endwhile;
    endif;
    $youtubeLink = get_field( 'ssylka_na_video', $donate_page->ID );
    $youtubeID  = getYouTubeVideoID( $youtubeLink );
    $correct_art = [
        'title' => $title,
        'youtubeId' => $youtubeID,
        'left'  => $left,
        'right' => $right
    ];

    return $correct_art;
}

function getTvs( $offset = 0, $limit = 10, $cat = '', $page = 1 ) {
    global $wp_query;
    $tax_query            = [];
    $count_posts          = wp_count_posts( 'tv' );
    $published_post_count = $count_posts->publish;
    $total_pages          = ceil( $published_post_count / $limit );
    if ( $cat ) {
        $tax_query = array(
            array(
                'taxonomy' => 'categories_tv',
                'field'    => 'slug',
                'terms'    => $cat,
            )
        );
    };

    $args   = array(
        'paged'          => $page,
        'post_type'      => 'tv',
        'posts_per_page' => $limit,
        'offset'         => $offset,
        'status'         => 'publish',
        'tax_query'      => $tax_query
    );
    $tvs    = get_posts( $args );
    $result = [];
    foreach ( $tvs as $key => $tv ) {
        $cat   = get_the_terms( $tv->ID, 'categories' );
        $title = (string) $tv->post_title;
//		$img = get_field('image', $tv->ID);
        $img = get_the_post_thumbnail_url( $tv->ID, 'full' );

        if ( get_field( 'zakrepit', $tv->ID ) == 1 ) {
            $fixedPost = true;
            $prevImg   = get_the_post_thumbnail_url( $tv->ID, 'thumb-fixed-event' );
        } else {
            $fixedPost = false;
            $prevImg   = get_the_post_thumbnail_url( $tv->ID, 'tv-prev' );
        }
        $youtubeLink = get_field( 'ssylka_na_video', $tv->ID );
        $youtubeID = null;
        if ( $youtubeLink ) {
            $youtubeID  = getYouTubeVideoID( $youtubeLink );
            $api_key    = 'AIzaSyAoJk6xlrzvlbDM5z5K0A40hNpOtv-pozo';
            $api_url    = 'https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=' . $youtubeID . '&key=' . $api_key;
            $video_data = json_decode( file_get_contents( $api_url ) );

            $video_view_count = $video_data->items[0]->statistics->viewCount;
            $video_duration   = $video_data->items[0]->contentDetails->duration;
        } else {
            $video_view_count = false;
            $video_duration   = false;
        }


        $postContent  = $tv->post_content;
        $postDate     = get_the_date( '', $tv->ID );
        $iso8601_time = get_the_time( 'c', $tv->ID );
        $human_time   = human_time_diff( get_post_time( 'U', true, $tv->ID ), current_time( 'timestamp' ) );
        $correct_art  = [
            'id'            => $tv->ID,
            'title'         => $title,
            'content'       => $postContent,
            'postDate'      => $postDate,
            'dateTime'      => $iso8601_time,
            'humanTime'     => $human_time,
            'img'           => $img,
            'prevImg'       => $prevImg,
            'category'      => $cat->slug,
            'totalPages'    => $total_pages,
            'videoLink'    => $youtubeLink,
            'youtubeId'    => $youtubeID,
            'videoVC'       => $video_view_count,
            'videoDuration' => $video_duration
        ];
        array_push( $result, $correct_art );
    }

    return $result;
}

function getPhotoGallery( $offset = 0, $limit = 18, $cat = '', $page = 1 ) {
    global $wp_query;
    $tax_query            = [];
    $count_posts          = wp_count_posts( 'photogallery' );
    $published_post_count = $count_posts->publish;
    $total_pages          = ceil( $published_post_count / $limit );
    if ( $cat ) {
        $tax_query = array(
            array(
                'taxonomy' => 'categories_photogallery',
                'field'    => 'slug',
                'terms'    => $cat,
            )
        );
    };

    $args   = array(
        'paged'          => $page,
        'post_type'      => 'photogallery',
        'posts_per_page' => $limit,
        'offset'         => $offset,
        'status'         => 'publish',
        'tax_query'      => $tax_query
    );
    $photos = get_posts( $args );
    $result = [];
    $total_cat_posts = null;
    $total_cat_pages = null;
    foreach ( $photos as $key => $photo ) {
        if ( $cat !== '' ) {
            $categories = get_the_terms( $photo->ID, 'categories_photogallery' );
            foreach ( $categories as $item ) {
                if ( $item->slug === $cat ) {
                    $total_cat_posts = $item->count;
                    $total_cat_pages = ceil( $total_cat_posts / $limit );
                }
            }
        }
//		$cat   = get_the_terms( $photo->ID, 'categories_photogallery' );
        $title = (string) $photo->post_title;
//		$img = get_field('image', $tv->ID);
        $img = get_the_post_thumbnail_url( $photo->ID, 'full' );

        $postDate    = get_the_date( '', $photo->ID );
        $correct_art = [
            'id'         => $photo->ID,
            'title'      => $title,
            'postDate'   => $postDate,
            'img'        => $img,
            'category'    => $cat !== '' ? $cat : '',
            'totalPosts'  => $cat !== '' ? $total_cat_posts : $published_post_count,
            'totalPages'  => $cat !== '' ? $total_cat_pages : $total_pages,
            'currentPage' => $page > 0 ? $page : 1,
        ];
        array_push( $result, $correct_art );
    }

    return $result;
}

add_action( 'rest_api_init', function () {
    register_rest_route( '/options', '/all', array(
        'methods'  => 'GET',
        'callback' => 'getOptions',
    ) );
} );
function getOptions() {
    $options = getOptions_1();

    return json_encode( $options );
}

function getOptions_1() {
    $result = [
        'f_phone'           => get_theme_mod( 'f_phone', '+972 3-9217172' ),
        's_phone'           => get_theme_mod( 's_phone', '+972 545606810' ),
        'fax'               => get_theme_mod( 'fax', '+972 39226741' ),
        'email'             => get_theme_mod( 'email', 'russian@kabbalah.info' ),
        'youtube'           => get_theme_mod( 'youtube', 'russian@kabbalah.info' ),
        'facebook'          => get_theme_mod( 'facebook', 'russian@kabbalah.info' ),
        'vkontakte'         => get_theme_mod( 'vkontakte', 'russian@kabbalah.info' ),
        'telegram'         => get_theme_mod( 'telegram', 'russian@kabbalah.info' ),
        'instagram'         => get_theme_mod( 'instagram', 'russian@kabbalah.info' ),
        'whatsapp'          => get_theme_mod( 'whatsapp', 'russian@kabbalah.info' ),
        'name'              => get_bloginfo( 'name' ),
        'description'       => get_bloginfo( 'description' ),
        'tv_top_link_text'  => get_theme_mod( 'tv_top_link_text', '' ),
        'tv_top_link_url'   => get_theme_mod( 'tv_top_link_url', '' ),
        'tv_top_title'      => get_theme_mod( 'tv_top_title', '' ),
        'tv_top_text'       => get_theme_mod( 'tv_top_text', '' ),
        'youtube_link_text' => get_theme_mod( 'youtube_link_text', '' ),
        'youtube_link_url'  => get_theme_mod( 'youtube_link_url', '' ),
        'tv_vstup_text'     => get_theme_mod( 'tv_vstup_text', '' ),
    ];

    return $result;
}

function getIndexData() {
    $options  = getOptions_1();
    $mainPage = getMainPage();
    $result   = [
        'main'    => $mainPage,
        'options' => $options,
    ];

    return json_encode( $result );
}

function getMainPage() {
    $result                  = [];
    $mainSlider              = getMainSlider();
    $nextVebinar             = getDateVebinar();
    $events                  = getEvents( 0, 12 );
    $rightSlider             = get13veshey( 0, 13 );
    $quote                   = getMainQuote();
    $mainLaytman             = getMainLaytman();
    $getMainInternetProjects = getMainInternetProjects();
    $getMainIPnums = get_field('kol-vo_internet-proektov', 154);
    $getMainTeachers         = getMainTeachers();
    $getMainTraining         = getMainTraining();
    $getMainNumbers         = getMainNumbers();
    $correct_art             = [
        'mainSlider'   => $mainSlider,
        'nextVebinar'  => $nextVebinar,
        'events'       => $events,
        'rightSlider'  => $rightSlider,
        'quote'        => $quote,
        'mainLaytman'  => $mainLaytman,
        'intProjects'  => $getMainInternetProjects,
        'intProjectsNums'  => $getMainIPnums,
        'mainTeachers' => $getMainTeachers,
        'totalTeachers' => getTotalTeachers(),
        'mainTraining' => $getMainTraining,
        'mainNumbers' => $getMainNumbers,
    ];
    array_push( $result, $correct_art );

    return $result;
}
function getTotalTeachers() {
    $teacher_page     = get_post( 76 );
    $count1 = 0;
    $count2 = 0;
    if ( have_rows( 'prepodavateli_v_2_kolonki', $teacher_page->ID ) ) :
        while ( have_rows( 'prepodavateli_v_2_kolonki', $teacher_page->ID ) ) : the_row();
            $count1++;
        endwhile;
    endif;
    if ( have_rows( 'prepodavateli_full_width', $teacher_page->ID ) ) :
        while ( have_rows( 'prepodavateli_full_width', $teacher_page->ID ) ) : the_row();
            $count2++;
        endwhile;
    endif;
    wp_reset_postdata();

    return $total_teach = $count1+$count2;
}
function getDateVebinar() {
    global $redux;
    $result = [];
    if ( $redux['img_prev']['url'] ) {
        $correct_art = [
            'img'        => wp_get_attachment_image_src( $redux['img_prev']['id'], 'next_vebinar' )[0],
            'dateNumber' => $redux['date'],
            'month'      => $redux['month'],
            'title'      => $redux['title_vebinar'],
            'time1'      => $redux['time1'],
            'time2'      => $redux['time2'],
            'id'         => $redux['id_vebinar'],
        ];
        array_push( $result, $correct_art );

        return $result;
    }

    return null;
}

function getMainQuote() {
    global $redux;
    $result = [];
    if ( $redux['quote_title'] ) {
        $correct_art = [
            'title' => $redux['quote_title'],
            'text'  => $redux['quote_text'],
            'info'  => $redux['from_quote'],
            'idLink'  => $redux['id_quote_link_page'],
            'linkText'  => $redux['link_text'],
            'linkNums'  => $redux['link_nums'],
        ];
        array_push( $result, $correct_art );

        return $result;
    }

    return null;
}

function get13veshey( $offset = 0, $limit = 10, $cat = '', $page = 1 ) {
    global $wp_query;
    $args   = array(
        'paged'          => $page,
        'post_type'      => '13veshey',
        'posts_per_page' => $limit,
        'offset'         => $offset,
        'status'         => 'publish',
    );
    $veshey = get_posts( $args );
    $result = [];
    foreach ( $veshey as $key => $item ) {
        $title       = (string) $item->post_title;
        $img         = get_the_post_thumbnail_url( $item->ID, '13veshey' );
        $postContent = $item->post_content;
        $correct_art = [
            'id'      => $item->ID,
            'title'   => $title,
            'content' => $postContent,
            'img'     => $img,
            'postExcerpt'    => $item->post_excerpt
        ];
        array_push( $result, $correct_art );
    }

    return $result;
}

function getMainSlider() {
    global $wp_query;
    $main_page    = get_post( 154 );
    $result       = [];
    $spisok1      = [];
    $spisok2      = [];
    $spisok3      = [];
    $first_slide  = [];
    $second_slide = [];
    $third_slide  = [];
    if ( have_rows( '1_slajd', $main_page->ID ) ) :
        while ( have_rows( '1_slajd', $main_page->ID ) ) : the_row();
            if ( have_rows( 'spisok' ) ) :
                while ( have_rows( 'spisok' ) ) : the_row();
                    $spisok_item = [
                        'icon' => get_sub_field( 'ikonka', $main_page->ID ),
                        'text' => get_sub_field( 'tekst', $main_page->ID ),
                        'url' => get_sub_field( 'ssylka', $main_page->ID )
                    ];
                    array_push( $spisok1, $spisok_item );
                endwhile;
            endif;
            $slide1 = [
                'title'      => get_sub_field( 'zagolovok', $main_page->ID ),
                'url'        => get_sub_field( 'ssylka_v_razdel', $main_page->ID ),
                'list'       => $spisok1,
                'photo'      => get_sub_field( 'izobrazhenie_perednij_plan', $main_page->ID ),
                'background' => get_sub_field( 'kollazh', $main_page->ID ),
            ];
            array_push( $first_slide, $slide1 );
        endwhile;
    endif;
    if ( have_rows( '2_slajd', $main_page->ID ) ) :
        while ( have_rows( '2_slajd', $main_page->ID ) ) : the_row();
            if ( have_rows( 'spisok' ) ) :
                while ( have_rows( 'spisok' ) ) : the_row();
                    $spisok_item = [
                        'icon' => get_sub_field( 'ikonka', $main_page->ID ),
                        'text' => get_sub_field( 'tekst', $main_page->ID ),
                        'url' => get_sub_field( 'ssylka', $main_page->ID )
                    ];
                    array_push( $spisok2, $spisok_item );
                endwhile;
            endif;
            $slide2 = [
                'title'      => get_sub_field( 'zagolovok', $main_page->ID ),
                'url'        => get_sub_field( 'ssylka_v_razdel', $main_page->ID ),
                'list'       => $spisok2,
                'photo'      => get_sub_field( 'izobrazhenie_perednij_plan', $main_page->ID ),
                'background' => get_sub_field( 'kollazh', $main_page->ID ),
            ];
            array_push( $second_slide, $slide2 );
        endwhile;
    endif;
    if ( have_rows( '3_slajd', $main_page->ID ) ) :
        while ( have_rows( '3_slajd', $main_page->ID ) ) : the_row();
            if ( have_rows( 'spisok' ) ) :
                while ( have_rows( 'spisok' ) ) : the_row();
                    $spisok_item = [
                        'img'   => get_sub_field( 'prevyu_izobrazhenie', $main_page->ID ),
                        'title' => get_sub_field( 'nazvanie', $main_page->ID ),
                        'url'   => get_sub_field( 'ssylka', $main_page->ID )
                    ];
                    array_push( $spisok3, $spisok_item );
                endwhile;
            endif;
            $slide3 = [
                'title'      => get_sub_field( 'zagolovok', $main_page->ID ),
                'url'        => get_sub_field( 'ssylka_v_razdel', $main_page->ID ),
                'list'       => $spisok3,
                'photo'      => get_sub_field( 'izobrazhenie_perednij_plan', $main_page->ID ),
                'background' => get_sub_field( 'kollazh', $main_page->ID ),
            ];
            array_push( $third_slide, $slide3 );
        endwhile;
    endif;
    $correct_art = [
        'firstSlide'  => $first_slide,
        'secondSlide' => $second_slide,
        'thirdSlide'  => $third_slide,
    ];
    array_push( $result, $correct_art );

    return $result;
}


function getMainInternetProjects() {
    global $wp_query;
    $main_page = get_post( 154 );
    $result    = [];
    if ( have_rows( 'internet-proekty', $main_page->ID ) ) :
        while ( have_rows( 'internet-proekty', $main_page->ID ) ) : the_row();
            if ( get_sub_field( 'ikonka', $main_page->ID ) ) {
                $correct_art = [
                    'img'     => get_sub_field( 'ikonka', $main_page->ID ),
                    'title'   => get_sub_field( 'nazvanie', $main_page->ID ),
                    'urlText' => get_sub_field( 'tekst_ssylki', $main_page->ID ),
                    'url'     => get_sub_field( 'csylka', $main_page->ID ),
                ];
                array_push( $result, $correct_art );
            }
        endwhile;
    endif;

    return $result;
}

function getMainTeachers() {
    global $wp_query;
    $main_page = get_post( 154 );
    $result    = [];
    if ( have_rows( 'prepodavateli_akademii', $main_page->ID ) ) :
        while ( have_rows( 'prepodavateli_akademii', $main_page->ID ) ) : the_row();
            if ( get_sub_field( 'foto', $main_page->ID ) ) {
                $correct_art = [
                    'photo'       => get_sub_field( 'foto', $main_page->ID ),
                    'name'        => get_sub_field( 'imya_familiya', $main_page->ID ),
                    'description' => get_sub_field( 'biografiya', $main_page->ID ),
                ];
                array_push( $result, $correct_art );
            }
        endwhile;
    endif;

    return $result;
}

function getMainTraining() {
    global $wp_query;
    $main_page = get_post( 154 );
    $result    = [];
    if ( have_rows( 'formaty_obucheniya', $main_page->ID ) ) :
        while ( have_rows( 'formaty_obucheniya', $main_page->ID ) ) : the_row();
            if ( get_sub_field( 'izobrazhenie', $main_page->ID ) ) {
                $correct_art = [
                    'img'         => get_sub_field( 'izobrazhenie', $main_page->ID ),
                    'title'       => get_sub_field( 'zagolovok', $main_page->ID ),
                    'description' => get_sub_field( 'opisanie', $main_page->ID ),
                ];
                array_push( $result, $correct_art );
            }
        endwhile;
    endif;

    return $result;
}

function getMainNumbers() {
    global $wp_query;
    $main_page = get_post( 154 );
    $result    = [];
    if ( have_rows( 'nemnogo_czifr', $main_page->ID ) ) :
        while ( have_rows( 'nemnogo_czifr', $main_page->ID ) ) : the_row();
            if ( get_sub_field( 'chislo', $main_page->ID ) ) {
                $correct_art = [
                    'number'         => get_sub_field( 'chislo', $main_page->ID ),
                    'description'       => get_sub_field( 'opisanie', $main_page->ID ),
                ];
                array_push( $result, $correct_art );
            }
        endwhile;
    endif;

    return $result;
}

function getMainLaytman() {
    global $wp_query;
    $main_page  = get_post( 154 );
    $result     = [];
    $block_left = [];
    $list       = [];
    if ( have_rows( 'mihael_lajtman', $main_page->ID ) ) :
        while ( have_rows( 'mihael_lajtman', $main_page->ID ) ) : the_row();
            if ( have_rows( 'blok_sleva' ) ) :
                while ( have_rows( 'blok_sleva' ) ) : the_row();
                    $block_item = [
                        'title' => get_sub_field( 'zagolovok', $main_page->ID ),
                        'text'  => get_sub_field( 'tekst', $main_page->ID ),
                        'quote' => get_sub_field( 'czitata', $main_page->ID ),
                    ];
                    array_push( $block_left, $block_item );
                endwhile;
            endif;
            if ( have_rows( 'blok_sprava' ) ) :
                while ( have_rows( 'blok_sprava' ) ) : the_row();
                    $list_item = [
                        'text' => get_sub_field( 'tekst', $main_page->ID )
                    ];
                    array_push( $list, $list_item );
                endwhile;

            endif;
        endwhile;
    endif;
    $correct_art = [
        'block' => $block_left,
        'list'  => $list,
    ];
    array_push( $result, $correct_art );

    return $result;
}

function getYouTubeVideoID( $url ) {
    $queryString = parse_url( $url, PHP_URL_QUERY );
    parse_str( $queryString, $params );
    if ( isset( $params['v'] ) && strlen( $params['v'] ) > 0 ) {
        return $params['v'];
    } else {
        return "";
    }
}

require_once( get_template_directory() . '/config/config.php' );
add_action( 'init', 'eventsSeo', 25 );
function eventsSeo() {
    global $wp_post_types;
    $post_type_name = array('events', '13veshey');
    if( isset( $wp_post_types[ $post_type_name ] ) ) {
        $wp_post_types[$post_type_name]->show_in_rest = true;
        $wp_post_types[$post_type_name]->rest_base = $post_type_name;
        $wp_post_types[$post_type_name]->rest_controller_class = ‘WP_REST_Posts_Controller’;
    }
}
register_nav_menus(
    array(
        'lang' => __( 'Lang Menu', 'twentynineteen' ),
        'main' => __( 'Main Menu', 'twentynineteen' ),
        'footer' => __( 'Footer Menu', 'twentynineteen' ),
    )
);