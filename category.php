<?php get_header(); ?>



        <!--posts starts-->
        <div class="posts">
        <?php
       
                if(have_posts() ){
                    while(have_posts() ){
                   the_post();
                        global $post;
                      
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
                    <a href="<?php the_permalink(); ?>">   <h3><?php the_title(); ?></h3> </a>
                </div>
            
                <div class="post-date">
                    <p> <?php echo get_the_date('Y/m/d'); ?></p>
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/agenda.svg'?>" alt="">
                </div>
                <div class="post-excerpt">
                   <p><?php the_excerpt(); ?></p>
                </div>
                <div class="post-share">
                  <a href="<?php the_permalink(); ?>">  <img src="<?php echo get_template_directory_uri() .'/assets/Images/Arrow.svg'?>" id="arrow" alt=""> </a>
                 
                    <div class="ps">
                        <p><?php echo ip_get_like_count('likes') ?>  لایک</p>
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
                  }  }
                    ?>
        </div>
        <!--posts ends-->

      
        
        <?php
       wp_footer();
       get_footer(); ?>