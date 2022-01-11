<?php get_header(); ?>
<h2><?php _e( 'This is somehow embarrassing, isn&rsquo;t it?' ); ?></h2>

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
<?php get_footer(); ?> 