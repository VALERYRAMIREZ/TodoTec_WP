<?php get_header(); ?>
<div class="container-404">
    <h2 class="page-heading">Oh! Qué?? 404?</h2>
    <img src="http://source-unsplash.com?640x480/?cats" alt="Imagen perdida">
    <h3>Disculpa, Creo que te perdiste. Por favor prueba con los siguientes enlaces.</h3>
    <ul>
        <li><a href="<?php echo site_url('/blog')?>">Lista de Blogs</a></li>
        <li><a href="<?php echo site_url('/projects')?>">Lista de Proyectos</a></li>
        <li><a href="<?php echo site_url('/about')?>">Sobre Nosotros</a></li>
        <li><a href="<?php echo site_url('')?>">Página Principal</a></li>
    </ul>
    </div>
<?php get_footer(); ?>