<?php get_header(); ?>
    <main>
            <h2 class="page-heading"><?php the_archive_title(); ?></h2>
        <section>
            <?php
                while(have_posts()) {
                    the_post();
            ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="card-meta">
                        Posted by <?php the_author(); ?> a las <?php the_time('F j, Y') ?>
                    </div>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Leer más</a>
                </div>
            </div>
            <?php 
                }
                if(have_posts() == false) { /*No estaba en el código inicial, lo agregué para juzgar si encuentra los
                                    * posts de proyectos. */
            ?>
                <h2>Error, No se encuentran los Proyectos. index.php</h2>
            <?php
                }
                wp_reset_query(); 
            ?>
        </section>
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
        <?php get_footer(); ?>