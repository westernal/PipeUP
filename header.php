<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php  wp_head(); ?>
</head>
<body>
    <div class="home-page">
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" >&times;</a>
        <div class="overlay-content">
        <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'تاسیسات' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                <a href="<?php echo esc_url( $category_link ); ?>">  <p>تاسیسات</p> </a> 
                 <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'تعمیرات' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                 <a href="<?php echo esc_url( $category_link ); ?>">  <p>تعمیرات</p> </a> 
                 <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'راهنمای خرید' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                 <a href="<?php echo esc_url( $category_link ); ?>" >  <p>راهنمای خرید</p> </a> 
                 <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'آموزش کاربردی' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                <a href="<?php echo esc_url( $category_link ); ?>">   <p>آموزش کاربردی</p> </a> 
                 <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'راهنمای اجرا' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                 <a href="<?php echo esc_url( $category_link ); ?>">   <p>راهنمای اجرا</p> </a> 
        </div>
      </div>
        <!-- header starts -->
        <div class="header">
            <div class="lheader">
            <a href="#" class="burger-menu"> <img src="<?php echo get_template_directory_uri() .'/assets/Images/Burger.svg'?>" alt=""  > </a>
              <a href="https://pipeup.ir/" id="rhid">  <button>بازگشت به سایت اصلی</button> </a>
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group 3013.svg'?>" alt="">
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group 3014.svg'?>" alt="">
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group 3015.svg'?>" alt="">
            </div>
            <div class="rheader">
                <div class="header-nav" id="rhid">
                <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'تاسیسات' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                <a href="<?php echo esc_url( $category_link ); ?>">  <p>تاسیسات</p> </a> 
                 <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'تعمیرات' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                 <a href="<?php echo esc_url( $category_link ); ?>">  <p>تعمیرات</p> </a> 
                 <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'راهنمای خرید' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                 <a href="<?php echo esc_url( $category_link ); ?>" >  <p>راهنمای خرید</p> </a> 
                 <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'آموزش کاربردی' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                <a href="<?php echo esc_url( $category_link ); ?>">   <p>آموزش کاربردی</p> </a> 
                 <?php

// Get the ID of a given category

$category_id = get_cat_ID( 'راهنمای اجرا' );
// Get the URL of this category

$category_link = get_category_link( $category_id );

?>
                 <a href="<?php echo esc_url( $category_link ); ?>">   <p>راهنمای اجرا</p> </a> 
                </div>
            <a href="<?php echo get_home_url(); ?>">   <img src="<?php echo get_template_directory_uri() .'/assets/Images/pipe up logo.svg'?>" alt="" id="plogo"> </a> 
            </div>
        </div>
        <!-- header ends -->