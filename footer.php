        <footer>
            <div id="left-footer">
                <h3>Enlaces rápidos</h3>
                <p>
                    <ul>
                        <li>
                            <a href=<?php echo site_url(''); ?>>Inicio</a>
                        </li>
                        <li>
                            <a href=<<?php echo site_url('/about'); ?>>Sobre Nosotros</a>
                        </li>
                        <li>
                            <a href=<?php echo site_url('/privacy-policy'); ?>>Política de Privacidad</a>
                        </li>
                        <li>
                            <a href=<?php echo site_url('/blog'); ?>>Blogs</a>
                        </li>
                        <li>
                            <a href=<?php echo site_url('/projects'); ?>>Proyectos</a>
                        </li>
                        <li>
                            <a href=<?php echo site_url('/contact'); ?>>Contacto</a>
                        </li>
                    </ul>
                </p>
            </div>
            <div id="right-footer">
                <h3>Síguenos en</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Este sitio fue realizado por TodoTec basado en el sitio de GTCoding.</p>
            </div>
        </footer>
    </main>
    <?php wp_footer(); ?>
</body>
</html>