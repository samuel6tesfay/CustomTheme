<?php get_header(); ?>

<div class="container">

<h4 class="mt-3"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?' ); ?></h4>

<div class="row">
<div class="col-9">
<?php get_search_form(); ?>
<h3>Check out some of our popular content:</h3>
<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10, 'format' => 'custom', 'before' => '', 'after' => '<br />' ) ); ?>

</div>
<div class="col-3">
<?php get_sidebar();?>
</div>
</div>

</div>

<?php get_footer(); ?>