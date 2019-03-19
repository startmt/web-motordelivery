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
</div></div></li><div class="underline"></div></div></div>

 <?php
 endwhile;
    endif;
    ?>
    </section>

<?php get_footer(); ?>