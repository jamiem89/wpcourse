<?php get_header(); ?>

<?php

while(have_posts()) {
    the_post();?>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg');?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title();?></h1>
            <div class="page-banner__intro">
            <p>UPDATE THIS</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">

        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Events home</a> <span class="metabox__main"><?php the_title();?></span></p>
        </div>

        <div class="generic-content">
            <?php the_content();?>
        </div>

        <?php
            $relatedPrograms = get_field('related_programs');

            if($relatedPrograms) {

                echo '<hr class="section-break">';
                echo '<h2 class="headline headline--medium">Related programs</h2>';
                echo '<ul class="link-list min-list">';

                foreach($relatedPrograms as $program) { ?>

                    <li><a href="<?php echo get_the_permalink($program);?>"><?php echo get_the_title($program);?></a></li>

                <?php }

                echo '</ul>';

            }

        ?>

    </div>

<?php } ?>

<?php get_footer();?>