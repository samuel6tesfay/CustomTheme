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


        // If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
        
    }}?>


</div>

<?php
// adds default footer or from footer.php
get_footer();
  
?>

