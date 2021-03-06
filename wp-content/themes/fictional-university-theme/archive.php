<?php
    get_header();
?>

<?php pageBanner(array(
    'title' => get_the_archive_title(),
    'subtitle' => get_the_archive_description(),
)); ?>

<div class="container container--narrow page-section">
    <?php while(have_posts()) {
        the_post();?>

        <div class="post-item">
            <h2><a href="<?php the_permalink();?>" class="headline headline--medium headline--post-title"><?php the_title();?></a></h2>
            <div class="metabox">
                <!-- The author name can use the 'nickname' in the users profile menu  -->
                <p>Posted by <?php the_author_posts_link();?> on <?php the_time('dS M Y');?> in <?php echo get_the_category_list(', ');?></p>
            </div>
            <div class="generic-content">
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink();?>" class="btn btn--blue">Read more</a></p>
            </div>

        </div>

    <? } ?>

    <?php
        echo paginate_links();
    ?>

</div>


<?php
    get_footer();
?>