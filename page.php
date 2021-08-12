<?php get_header(); ?>


<?php while(have_posts()) {
    the_post();
?>

<h2 class="page-heading"><?php the_title(); ?></h2>
        <div id="post-container">
            <section id="blogpost">
                <div class="card">
                    <?php if(has_post_thumbnail()) { ?>
                    <div class="card-image">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="Card Image">
                    </div>
                    <?php } ?>
                    <div class="card-description">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
<?php } ?>
            <aside id="sidebar">
                <h3><?php echo dynamic_sidebar('main-sidebar'); ?></h3>
                <p></p>
            </aside>
        </div>
<?php get_footer(); ?>