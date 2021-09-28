<?php get_header(); ?>

 <!--single main starts-->
 <div class="single-main">
 <?php
 if(have_posts() ){
                    
                    the_post();
                     global $post;
                     $author_ID = $post->post_author;
                     $author_URL = get_author_posts_url($author_ID);
                 ?>
            <div class="sm-loc">
                <p>صفحه اصلی</p>
                <p id="slash">/</p>
                <p>           <?php $category = get_the_category();

if ( $category[0] ) {
    echo   $category[0]->cat_name ;
} ?></p>
                <p id="slash">/</p>
                <p id="slash"><?php the_title(); ?></p>
            </div>
            <div class="sp">
            <div class="sm-pic">
            <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        }
                        ?>
                <div class="f-title">
                    <h3> <?php the_title(); ?></h3>
                   <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
        <div class="sm-share">
           
           <div class="sms">
              
                   <a href="<?php echo add_query_arg('post_action', 'like'); ?>">
                   <div class="ps">
                       <p><?php echo ip_get_like_count('likes') ?> لایک</p>
                       <img src="<?php echo get_template_directory_uri() .'/assets/Images/like.svg'?>" alt="">
                   </div>
               </a>
                        <a href="#cm-sec">
                   <div class="ps">
                   <p><?php comments_number('0','1','%'); ?> دیدگاه </p>
                       <img src="<?php echo get_template_directory_uri() .'/assets/Images/chat.svg'?>" alt="">
                   </div>
                   </a>
                   <a href="#">
                   <div class="ps">
                       <p>بعدا بخوانید </p>
                       <img src="<?php echo get_template_directory_uri() .'/assets/Images/bookmark.svg'?>" alt="">
                   </div>
               </a>
           </div>
           <div class="sm-cat">
           <?php $category = get_the_category();

if ( $category[0] ) {
   echo   $category[0]->cat_name ;
} ?>
           </div>
       </div>
        <div class="sm-content">
            <p> <?php the_content(); ?></p>
        </div>
        <?php } ?>
        </div>
        <!--single main ends-->

        <?php
    if(comments_open() || get_comments_number()) {
        comments_template();
    }
 
    ?>

                    
                    <?php
        $categories  = get_the_category();
        $rp_query  =  new WP_Query([
            'posts_per_page'  =>  3,
            'post__not_in'   => [ $post->ID ],
            'cat'            => !empty($categories) ? $categories[0]->term_id : null   
        ]);

        if($rp_query->have_posts()){
            ?>
            
        <!--same posts starts-->
        <div class="same-posts">
            <div class="sp-header">
                <p>مطالب مرتبط</p>
            </div>
            <div class="products">
                <div class="product-list">
            <div class="product-bck"></div>
            <?php
            while($rp_query->have_posts()){
                $rp_query->the_post();
                global $post;
                        $author_ID = $post->post_author;
                        $author_URL = get_author_posts_url($author_ID);
                ?>
                    <div class="post">
                        <div class="post-pic">
                        <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full' , [
                                'id' => 'post-main'
                            ]);
                        }
                        ?>
                            <div class="cat-img">
                                <img src="<?php echo get_template_directory_uri() .'/assets/Images/copy.svg'?>" alt="">
                            </div>
                            <div class="fc">
                            <div class="post-cat">
                            <?php $category = get_the_category();

if ( $category[0] ) {
    echo   $category[0]->cat_name ;
} ?>
                            </div>
                        </div>
                        </div>
                        
                        <div class="post-title">
                            <a href="<?php the_permalink(); ?>">   <h3><?php the_title(); ?> </h3> </a>
                        </div>
                    
                        <div class="post-date">
                            <p><?php echo get_the_date('Y/m/d'); ?>  </p>
                            <img src="<?php echo get_template_directory_uri() .'/assets/Images/agenda.svg'?>" alt="">
                        </div>
                        <div class="post-excerpt">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="post-share">
                          <a href="<?php the_permalink(); ?>">  <img src="<?php echo get_template_directory_uri() .'/assets/Images/Arrow.svg'?>" id="arrow" alt=""> </a>
                          
                            <div class="ps">
                                <p><?php echo ip_get_like_count('likes') ?> لایک</p>
                                <img src="<?php echo get_template_directory_uri() .'/assets/Images/like.svg'?>" alt="">
                            </div>
                        
                        <a href="<?php the_permalink(); ?>"> 
                    <div class="ps">
                        <p><?php comments_number('0','1','%'); ?> دیدگاه </p>
                        <img src="<?php echo get_template_directory_uri() .'/assets/Images/chat.svg'?>" alt="">
                    </div>
                    </a>
                            <a href="#">
                            <div class="ps">
                                <p>بعدا بخوانید </p>
                                <img src="<?php echo get_template_directory_uri() .'/assets/Images/bookmark.svg'?>" alt="">
                            </div>
                        </a>
                        </div>
                    </div>
                    <?php
            }
            wp_reset_postdata();
        }
        ?>
                </div>
            </div>
        </div>
        <!--same posts ends-->

        <?php
       wp_footer();
       get_footer(); ?>