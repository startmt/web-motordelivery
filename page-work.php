<?php 
     get_header();?>
     <section id="post-n" style="padding:20px;">
    <div class="container">
<?php
 if (have_posts()) :
    while (have_posts()) :   the_post(); ?>
    <div class="wow fadeInLeft" data-wow-duration="1s">
        <div class="bg" style="background: linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.9)),
        url('<?php the_post_thumbnail_url('large');?>'); background-size:cover;">
    <h1 class="text-center title"><?php the_title() ?></h1>
 </div>
 </div>
 <div class="col-12">
     <div class="wow fadeIn" data-wow-duration="1s">
        <div class="text">
    <?php the_content(); ?>
 </div>
 </div>
 <div class="row">
 <?php
    $newsposts = new WP_Query('cat=2&posts_per_page=4');
    if ($newsposts->have_posts()) : 
        while ($newsposts->have_posts()) :   $newsposts->the_post(); 
    ?>
    <div class="col-lg-4 col-md-6 col-sm-12">
    <a href="<?php the_permalink();?>">
              <div class="discover">
                <div style="background-image: url('<?php the_post_thumbnail_url();?>'); " class="imagepost"></div>
                <div class="mousepost">
                <div class="category title"> <h2><?php the_title() ?></h2></div>
                </div>
              </div>
     </a>
    </div>
    <?php 
    endwhile;
endif;?>
</div>

 </div>
</div></div></li><div class="underline"></div></div></div>

 <?php
 endwhile;
    endif;
    ?>
    </section>

<?php get_footer(); ?>