<?php/*
* Template Name: main
*/
?>

<?php get_header(); ?>
<div>
        <!-- main post starts -->
        <div class="main-post">
            <div class="recent-news">
                <?php
            $my_query = new WP_Query( 'category_name=اخبار&posts_per_page=3' );
       if($my_query->have_posts() ){
        while($my_query->have_posts() ){        
        $my_query->the_post();
             
                  global $post;
                  $author_ID = $post->post_author;
                  $author_URL = get_author_posts_url($author_ID);
                  ?>
                <div class="news">
                <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full' , [
                                'class' => 'lg-form-pic'
                            ]);
                        }
                        ?>
                    <div class="news-content">
                        <div class="nc-cat">
                        <?php $category = get_the_category();
                        

if ( $category[0] ) {
    echo   $category[0]->cat_name ;
} ?>
                        </div>
                        <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
                       
                    </div>
                </div>
                <hr>
                <?php } } ?>
         
            </div>
            <?php
            $my_query1 = new WP_Query( 'category_name=ویژه&posts_per_page=1' );
       if($my_query1->have_posts() ){
                    
        $my_query1->the_post();
             
                  global $post;
                  $author_ID = $post->post_author;
                  $author_URL = get_author_posts_url($author_ID);
                  ?>
                  <a href="<?php the_permalink(); ?>">
            <div class="feature">
            <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full' , [
                                'class' => 'lg-form-pic'
                            ]);
                        }
                        ?>
               <div class="fc"><div class="f-cat"><?php $category = get_the_category();

if ( $category[0] ) {
    echo   $category[0]->cat_name ;
} ?></div> </div>
                <div class="f-title">
                    <h3><?php the_title(); ?>  </h3>
                  <p><?php the_excerpt(); ?></p>
                </div>
            </div>
            </a>
            <?php } ?>
        </div>
        <!-- main post ends -->

        <!--banners starts-->
        <div class="banners">
      
            <?php if( get_field('banner1') ): ?>
                <img src="<?php the_field('banner1'); ?>" alt="">
                <?php endif; ?>
                <?php if( get_field('banner2') ): ?>
                <img src="<?php the_field('banner2'); ?>" alt="">
                <?php endif; ?>
                <?php if( get_field('banner3') ): ?>
                <img src="<?php the_field('banner3'); ?>" alt="">
                <?php endif; ?>
        </div>
        <!--banners ends-->

        <!--posts starts-->
        <div class="posts">
        <?php
        $args = array(
            'posts_per_page' => 12
        );
             $my_query2 = new WP_Query( $args  ); 
                if($my_query2->have_posts() ){
                    while($my_query2->have_posts() ){
                    $my_query2->the_post();
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
                  }  }
                    ?>
        </div>
        <!--posts ends-->

        <!-- new products starts-->
        <div class="new-products">
            <div class="np-header">
                <a href="https://pipeup.ir/">
                <div class="redirect">
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/Arrow.svg'?>" alt="">
                    <p>وب سایت اصلی</p>
                </div>
            </a>
                <p>محصولات جدید ما</p>
                
            </div>
            <div class="products">
                <div class="product-list">
                    <div class="product-bck"></div>
                    <div class="product">
                        <img src="./images/0plmbw-560x420.jpg" alt="">
                        <h3>شیر صنعتی</h3>
                        <p id="pexcerpt">Lorem ipsum doular feded</p>
                        <div class="product-price">
                            <p id="price">قیمت</p>
                            <p id="money">29,345,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- new products ends-->
        <?php
       wp_footer();
       get_footer(); ?>
       </div>
       