<?php 
 // adds default header or from header.php
 get_header();
?>
<section class="blogs" id="blogs">


    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

<?php 
if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('contents/content');
      
     }}?>
      </div>

    </div>

</section>


<?php
 // adds default footer or from footer.php
 get_footer();
 
 ?>
  


