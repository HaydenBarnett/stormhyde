<section id="products">
    <div class="container">
        <div class="row">

            <?php

                $post_type = 'product';

                $args = array(
                    'post_type' => $post_type,
                    'posts_per_page' => -1,
                );

                $posts = new WP_Query($args);

            ?>
         
            <?php if( $posts->have_posts() ): ?>

                <?php while( $posts->have_posts() ) : $posts->the_post(); ?>

                    <?php 
                        $product_category = get_field('product_category');
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                    ?>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="<?php the_permalink(); ?>" class="card">
                            <div class="card-image" style="background-image:url(<?php echo $image[0]; ?>);"></div>
                            <div class="card-info">
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                <p class="meta"><?php echo $product_category; ?></p>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </div>
</section>