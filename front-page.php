<?php get_header(); ?>

<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" style="background-image: url(<?php echo get_theme_mod('header_slider_image',get_template_directory_uri().'/assets/img/banner.png') ?>);">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <span><?php echo get_theme_mod('slider_text_alpha'); ?></span>
                            <h3><?php echo get_theme_mod('slider_sub_heading'); ?></h3>
                            <p><?php echo get_theme_mod('below_sub_heading') ?></p>
                            <?php if (get_theme_mod('join_us_setting') != ''){ ?>
                            <a href="<?php echo get_theme_mod('button_url_setting')?> " class="boxed-btn3"><?php echo get_theme_mod('join_us_setting');?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay" style="background-image: url(<?php echo get_theme_mod('header_slider_two',get_template_directory_uri().'/assets/img/banner2.png') ?>);">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <span><?php echo get_theme_mod('slider_text_alpha'); ?></span>
                            <h3><?php echo get_theme_mod('slider_sub_heading_second') ?></h3>
                            <p><?php echo get_theme_mod('below_sub_heading') ?></p>
                            <?php if (get_theme_mod('join_us_setting') != ''){ ?>
                            <a href="<?php echo get_theme_mod('button_url_setting')?> " class="boxed-btn3"><?php echo get_theme_mod('join_us_setting');?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" style="background-image: url(<?php echo get_theme_mod('header_slider_image',get_template_directory_uri().'/assets/img/banner.png') ?>);">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <span><?php echo get_theme_mod('slider_text_alpha'); ?></span>
                            <h3><?php echo get_theme_mod('slider_sub_heading'); ?></h3>
                            <p><?php echo get_theme_mod('below_sub_heading') ?></p>
                            <?php if (get_theme_mod('join_us_setting') != ''){ ?>
                            <a href="<?php echo get_theme_mod('button_url_setting')?> " class="boxed-btn3"><?php echo get_theme_mod('join_us_setting');?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay" style="background-image: url(<?php echo get_theme_mod('header_slider_two',get_template_directory_uri().'/assets/img/banner2.png') ?>);">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <span><?php echo get_theme_mod('slider_text_alpha'); ?></span>
                            <h3><?php echo get_theme_mod('slider_sub_heading_second') ?></h3>
                            <p><?php echo get_theme_mod('below_sub_heading') ?></p>
                            <?php if (get_theme_mod('join_us_setting') != ''){ ?>
                            <a href="<?php echo get_theme_mod('button_url_setting')?> " class="boxed-btn3"><?php echo get_theme_mod('join_us_setting');?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="catagory_area">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-6">
                <div class="single_catagory text-center overlay2 cat_bg_1">
                    <h3>For Girl</h3>
                    <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                    <a href="<?php echo get_theme_mod('button_url_setting')?> " class="boxed-btn3">Join Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single_catagory text-center overlay2 cat_bg_2">
                    <h3>For Boys</h3>
                    <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                    <a href="<?php echo get_theme_mod('button_url_setting')?> " class="boxed-btn3">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
get_footer(); 