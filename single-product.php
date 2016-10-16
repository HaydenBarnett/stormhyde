<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php 
            $category = get_field('product_category');
            $download_1 = get_field('download_1');
            $download_2 = get_field('download_2');
        ?>

        <section id="product-banner" class="section-medium section-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="small animated fadeInDown delay-0"><span><?php echo $category; ?></span></p>
                        <h1 class="animated fadeInUp delay-0"><?php the_title(); ?></h1>
                        <h2 class="animated fadeInUp delay-0"><?php the_excerpt(); ?></h2>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    
                    <section id="downloads">
                        
                        <?php if ($download_1): ?>
                            <?php 
                                $terms = get_the_terms($download_1, 'dlm_download_category'); 
                                foreach ( $terms as $term ) {
                                    $cat = $term->name;
                                }
                            ?>
                            <a href="<?php echo do_shortcode('[download_data id="'.$download_1.'" data="download_link"]'); ?>" class="btn btn-download btn-white btn-large">Download<span><?php echo $cat; ?></span></a>
                        <?php endif; ?>
                        <?php if ($download_2): ?>
                            <?php 
                                $terms = get_the_terms($download_2, 'dlm_download_category'); 
                                foreach ( $terms as $term ) {
                                    $cat = $term->name;
                                }
                            ?>
                            <a href="<?php echo do_shortcode('[download_data id="'.$download_2.'" data="download_link"]'); ?>" class="btn btn-download btn-white btn-large">Download<span><?php echo $cat; ?></span></a>
                        <?php endif; ?>
                    </section>

                    <section id="post-<?php the_ID(); ?>" <?php post_class('section-small'); ?>>

                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>

                    </section>

                </div>

                <div class="col-md-6">

                    <?php if(have_rows('gallery_images')): ?>

                        <section id="gallery">

                            <div class="slider slider-upper">

                                <?php while(have_rows('gallery_images')): the_row(); ?>
                                    <div class="slide">
                                        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                <?php endwhile; ?>

                            </div>

                            <div class="slider slider-lower">

                                <?php while(have_rows('gallery_images')): the_row(); ?>
                                    <div class="slide">
                                        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                <?php endwhile; ?>

                            </div>

                        </section>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    <?php endwhile; ?>

    <?php get_template_part('partials/products'); ?>
    
<?php get_footer(); ?>