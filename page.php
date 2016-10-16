<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('partials/banner'); ?>

        <?php get_template_part('partials/content'); ?>

    <?php endwhile; ?>

<?php get_footer(); ?>