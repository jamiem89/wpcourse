
<?php
    get_header();
?>

<?php pageBanner(array(
    'title' => 'All Programs',
    'subtitle' => 'Programs out the wazoo',
)); ?>

<div class="container container--narrow page-section">

    <ul class="link-list min-list">
        <?php
        while(have_posts()) {
            the_post();?>

            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>

        <? } ?>
    </ul>

    <?php
        echo paginate_links();
    ?>

</div>


<?php
    get_footer();
?>