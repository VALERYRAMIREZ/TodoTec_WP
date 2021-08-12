    <?php get_header(); ?>
    <div id="banner">
        <h1>&lt;TodoTec/&gt;</h1>
        <h3>Ingeniería de Calidad</h3>
    </div>
    <main>
        <a href="<?php echo site_url('/blog');?>">
            <h2 class="section-heading">Todos los blogs</h2>
        </a>
        <section>
            <?php
                $args = array(
                    'post_type' => 'post',
                    'post_per_page' => 2
                );
                $blogposts = new WP_Query($args);
                while($blogposts->have_posts()) {
                    $blogposts->the_post();
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
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Leer más</a>
                </div>
            </div>
            <?php 
                }
                wp_reset_query(); 
            ?>
        </section>
        <h2 class="section-heading">Todos los Proyectos</h2>
        <section>
        <?php
                $args = array(
                    'post_type' => 'project',
                    'post_per_page' => 2
                );
                $projects = new WP_Query($args);
                while($projects->have_posts()) {
                    $projects->the_post();
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
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Leer más</a>
                </div>
            </div>
            <?php 
                }
                wp_reset_query(); 
            ?>
        </section>
        <h2 class="section-heading">Código fuente</h2>
        <section id="section-source">
            <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi 
                nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore 
                magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum 
                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                pariatur? 
            </p>
            <a class="btn-readmore" href="#">Perfil de GitHub</a>
        </section>

        <?php get_footer(); ?>