<?php 
 get_header();
?>
<div class="container mt-2">
<?php 
if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('template-parts/post/post.html');
      
     }}?>
</div>


<?php
 get_footer();
 ?>