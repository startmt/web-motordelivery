<?php 
     get_header();?>
     <section id="title">
    
     <header>
     <div class="wow fadeIn" data-wow-duration="2s">
        <div class="bg">
            <div class="title">
        <h1 style="    white-space: normal;">PREECHA TRANSPORT</h1>
        </div>
</div>

</div>
</header>
</section>
     
<section id='about'>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 paddingitem">
                <div class="img-full" style="background:url('<?php echo get_template_directory_uri()?>/img/blog1-1.jpg'); background-size:cover"></div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <h2>PREECHA TRANSPORT</h2>
                <hr>
                <p>
                บริการ ขนส่งรถบิ๊กไบท์ ส่งมอเตอร์ไซค์ ทุกชนิด ทุกยี่ห้อ ไม่ว่าจะเป็น Yamaha Fino ฮาร์เลย์ Ducati หรือ BMW ออกทริปบิ๊กไบค์ ไปต่างจังหวัด หรือสถานที่ไกลๆ เรามีบริการขน Big-bike ไปยังจังหวัดต่างๆ
                ส่งด่วน ส่งไว รับส่งถึงหน้าบ้าน รับประกันความเสียหายระหว่างขนย้าย ส่งไว 100% ส่งด่วนภายใน 24 ชั่วโมง หรือ 48 ชั่วโมง ไม่ว่าจะใกล้หรือไกลเราไปทุกที่
                ขนส่งโดยทีมงานคุณภาพ ปลอดภัย เชื่อถือได้ บริการอย่างมืออาชีพ มีพนักงานขับรถที่อัธยาศัยดีเป็นมิตรต่อลูกค้า ไร้รอยขูดขีด ดูแลดี ราคาถูก ราคาคุยง่าย
                บริการเต็ม100 บริการถูกใจ บริการทั่วประเทศ ตั้งแต่ เชียงใหม่จนถึงนราธิวาธ ติดต่อ โทร 098-423-7950 (แบงค์) Line: @geg8839k
                </p>
            </div>
            <div class="col-sm-12" style="margin-top: 40px">
            <div class="img-full" style="height: 20.4rem;  background: linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.9)),
                 url('<?php echo get_template_directory_uri()?>/img/blog1-4.jpg'); background-size:cover;">
                <div class="title">
                <h2 >รวดเร็ว สะดวก ปลอดภัย</h2>
                <p>บริการฟรี!! รับหน้าบ้านส่งถึงหน้าบ้านส่งด่วนส่งไวปลอดภัย 100%</p>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
<section id='show' >
<?php
    $newsposts = new WP_Query('cat=2&posts_per_page=4');
    $a = 1;
     if ($newsposts->have_posts()) : ?>
<div class="container">
            <div class="row">
              <div class="col-md-12 title-margin">
                <h2 class="text-center">ผลงานของเรา </h2>
              </div>
              <?php 
              while ($newsposts->have_posts()) :   $newsposts->the_post(); 
              if ($a == 1) :{
               ?>
              <div class="col-md-6 blogspace">
              <a href="<?php the_permalink();?>">
              <div class="discover">
                <div style="background-image: url('<?php the_post_thumbnail_url();?>'); " class="imagepost"></div>
                <div class="mousepost">
                <div class="category title"> <h2><?php the_title() ?></h2></div>
                </div>
              </div>
     </a>
              </div>
                <?php }
                ?>
            
              <div class="col-md-6">
              <div class="row">
              <?php elseif ($a == 2) :{
               ?>
              <div class="col-md-6 blogspace">
              <a href="<?php the_permalink();?>">
                <div class="discover">
                <div style="background-image: url('<?php the_post_thumbnail_url();?>'); " class="imagepost">
                <div class="mousepost">
                              <div class="category title"> <h2><?php the_title() ?></h2></div>
                </div>
                </div>
                </div>
     </a>
                </div>
              <?php } 
              elseif ($a == 3) :{
               ?>
                <div class="col-md-6 blogspace">
                <a href="<?php the_permalink();?>">
                <div class="discover">
                <div style="background-image: url('<?php the_post_thumbnail_url();?>'); " class="imagepost"></div>
                <div class="mousepost">
                              <div class="category title"> <h2><?php the_title() ?></h2></div>
                </div>
                </div>
     </a>
                </div>
              <?php }
               elseif($a == 4) :{
               ?>
                <div class="col-md-12 blogspace">
                <a href="<?php the_permalink();?>">
                <div class="discover">
                <div style="background-image: url('<?php the_post_thumbnail_url();?>'); " class="imagepost"></div>
                <div class="mousepost">
                              <div class="category title"> <h2><?php the_title() ?></h2></div>
                </div>
                </div>
                </div>
     </a>
              </div>
              <?php  } ?>
              </div>
            </div>
            <div class="text-right">
            <button type="button"  class="btn " style="border: 2px solid #ff9f2a; color :#ff9f2a!important;">ดูทั้งหมด</button>
     </div>
          </div>
          <?php
               endif;

          $a += 1;
     endwhile;

     else :
        echo '<p> No content </p>';
   endif;
     ?>
</section>
<section id='contact'>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div style="background: #0f1f25; color:white; width:100%;height:100%; margin:auto; padding:50px;">
        <div class="text-center">
    <h2>ติดต่อ</h2>
    <p>สามารถติดต่อสอบถามได้ทางช่องทางดังนี้</p>
    <img src="<?php echo get_template_directory_uri()?>/img/400200phone.png" width="100%">
        <a href="http://line.me/ti/p/%40geg8839k"><img src="<?php echo get_template_directory_uri()?>/img/400200line.png" width="100%"></a>
    </div>
</div>
    </div>
        <div class="col-lg-6">
            <div class="img-full" style="background-image: url('<?php echo get_template_directory_uri()?>/img/blog1-2.jpg');"></div> 
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>