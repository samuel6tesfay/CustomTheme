<?php 
 // adds default header or from header.php
 get_header();
?>
<div class="container mt-2">
<?php 
if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('contents/content');
      
     }}?>
</div>


<?php
 // adds default footer or from footer.php
 get_footer();
 
 ?>
  


