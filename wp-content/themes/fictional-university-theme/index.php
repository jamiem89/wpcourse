<?php get_header(); ?>

<?php

    while(have_posts()) {
        the_post();?>

            <h1><?php the_title();?></h1>

            <?php the_content();?>

            <a href="<?php the_permalink();?>">Read more</a>

            <hr>

    <?php }
?>

<?php get_footer();?>