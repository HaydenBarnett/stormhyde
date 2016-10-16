    
    </div><!-- #wrapper -->

    <?php get_template_part('partials/banner', 'donate'); ?>

    <footer id="footer">

        <div class="container">

        	<div class="row">

                <div class="col-sm-9">

                    <h2>Products</h2>

                    <?php footer_menu(); ?>
                
                </div>

        		<div class="col-sm-3">

                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/symbol-white.svg" width="30" height="30" alt="Stormhyde">

                    <p>A semi-retired project by designer &amp; developer Hayden Barnett.</p>

                    <p>See what Hayden has been up to recently on his portfolio website <a href="http://haydenbarnett.com">haydenbarnett.com</a></p>

                    <p>&copy; <?php echo date('Y'); ?></p>

				</div>

			</div>

        </div>

    </footer>

    <?php wp_footer(); ?>

</body>
</html>