<?php get_header(); ?>
            <h2 class="page-heading">Resultados de Busqueda: <?php echo get_search_query(); ?></h2>
            <?php if(have_posts()) { ?>
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
                        Posted by <?php the_author(); ?>
                        <?php if(get_post_type() == 'post') { ?>
                            <a href="#"><?php echo get_the_category_list(', ') ?></a>
                        <?php } ?>
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
                <h2><?php echo site_url('/projects'); ?></h2>
            </div>
            <?php
            }
                wp_reset_query(); 
            ?>
        </section>
        <?php } 
        else { ?>
            <div class="no-results">
                <h2>No se encuentra la busqueda:( Escribiste algo mal?</h2>
                <h3>No te preocupes</h3>
                <h3>Chequea los siguientes enlaces</h3>
                <ul>
                    <li><a href="<?php echo site_url('/blog')?>">Lista de Blogs</a></li>
                    <li><a href="<?php echo site_url('/projects')?>">Lista de Proyectos</a></li>
                    <li><a href="<?php echo site_url('/about')?>">Sobre Nosotros</a></li>
                    <li><a href="<?php echo site_url('')?>">Página Principal</a></li>
                </ul>
            </div>
        <?php } ?>
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
        <?php get_footer(); ?>