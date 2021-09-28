<?php

// setup
define( 'JU_DEV_MODE',true);

// includes
include( get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));

// hooks
add_action('wp_enqueue_scripts','ju_enqueue');
add_theme_support( 'post-thumbnails' ); 
add_action('after_setup_theme','ju_setup_theme');
add_theme_support( 'title-tag' );

function custom_theme_titles_yoast( $title ) {
    $sep = '|';
    $name = get_bloginfo( 'name' );
    $desc = get_bloginfo( 'description', 'display' );
 
    if( is_front_page() ) {
        $pagetitle = $title;
        return "{$pagetitle}";
    }
     elseif( is_404() ) {
        $pagetitle = "404";
        return "{$pagetitle} {$sep} {$name} - {$desc}"; 
    }
    elseif( is_category() ) {
        $pagetitle = single_cat_title('', false);
        return "{$pagetitle}";
    }
    else {
        $pagetitle = $title;   
        return "{$pagetitle} {$sep} {$name} - {$desc}";
    }
}
add_filter( 'wpseo_title', 'custom_theme_titles_yoast', PHP_INT_MAX );
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}



function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length' );


function custom_comments($comment,$args,$depth) {
    
   
    
   $GLOBALS['comment'] = $comment;
       ?>
         <div class="comment">
                <div class="cm-text">
                    <h4><?php comment_author(); ?></h4>
                   <p><?php comment_text(); ?></p>
                </div>
                <div class="cm-pic"><?php echo get_avatar($comment,50,'',''); ?></div>
            </div>
          
       
   <?php
   
} 


   ?>

   <?php 
   if (isset($_POST['submitbtn'])) {
       $data = array(
           'name' => $_POST['name'],
           'phone' => $_POST['phone'],
           'service' => $_POST['service'],
           'more' => $_POST['more'],
       );
       $table_name = 'contact';

       $result = $wpdb->insert($table_name, $data, $format=NULL);

       if ($result==1) {
           echo "<script>alert('اطلاعات شما با موفقیت ثبت شد.');</script>";
       }else {
           echo "<script>alert('مشکلی پیش امده لطفا مجدد تلاش کنید.');</script>";
       }
   }

   function ip_post_likes($content) {
    // Check if single post
    if(is_singular('post')) {
        ob_start();

        ?>
  
           
        <?php

        $output = ob_get_clean();

        return $output . $content;
    }else {
        return $content;
    }
}

add_filter('the_content', 'ip_post_likes');

//---- Get like or dislike count
function ip_get_like_count($type = 'likes') {
    $current_count = get_post_meta(get_the_id(), $type, true);

    return ($current_count ? $current_count : 0);
}

//---- Process like or dislike
function ip_process_like() {
    $processed_like = false;
    $redirect       = false;

    // Check if like or dislike
    if(is_singular('post')) {
        if(isset($_GET['post_action'])) {
            if($_GET['post_action'] == 'like') {
                // Like
                $like_count = get_post_meta(get_the_id(), 'likes', true);

                if($like_count) {
                    $like_count = $like_count + 1;
                }else {
                    $like_count = 1;
                }

                $processed_like = update_post_meta(get_the_id(), 'likes', $like_count);
            }elseif($_GET['post_action'] == 'dislike') {
                // Dislike
                $dislike_count = get_post_meta(get_the_id(), 'dislikes', true);

                if($dislike_count) {
                    $dislike_count = $dislike_count + 1;
                }else {
                    $dislike_count = 1;
                }

                $processed_like = update_post_meta(get_the_id(), 'dislikes', $dislike_count);
            }

            if($processed_like) {
                $redirect = get_the_permalink();
            }
        }
    }

    // Redirect
    if($redirect) {
        wp_redirect($redirect);
        die;
    }
}

add_action('template_redirect', 'ip_process_like');