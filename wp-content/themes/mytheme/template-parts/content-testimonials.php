<?php
/**
 * Created by PhpStorm.
 * User: parvathyvd
 * Date: 2018-07-25
 * Time: 2:27 PM
 */
?>


<section class="section-testimonials">
            <div class="bg-video">
                <video class="bg-video__content" loop muted autoplay>
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/img/video.mp4" type="video/mp4">
                    <source src="<?php bloginfo('stylesheet_directory'); ?>/img/video.webm" type="video/webm">
                    </source>
                </video>
            </div>
            <div class="u-text-center mb-5">
                <h2 class="heading-secondary">Testimonials
                </h2>
            </div>
            <div class="container">
                <div class="row">
                <?php $loop =  new WP_Query(array(
                        'post_type' => 'testimonial',
                        'orderby'   => 'post_id',
                        'order'     =>  'ASC'
                        )); 
                      while($loop ->have_posts()) : $loop ->the_post(); ?>
                        <div class="col-sm-12">
                        <div class="testimonial__wrapper">
                            <figure class="testimonial__wrapper__image">
                        <?php 
                        if ( has_post_thumbnail() ) { ?>
                            <img class="testimonial__wrapper__image--image" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php }
                                ?>

                                <figcaption class="testimonial__wrapper__image--caption">Mary Taylor</figcaption>
                            </figure>
                            <div class="testimonial__wrapper__text">
                                <h3 class="heading-tertiary">
                                    <p><?php the_title(); ?></p>
                                </h3>
                                <p><?php the_content(); ?><p>
                            </div>
                        </div>
                    </div>
                   <?php endwhile; ?>
                    </div>
                   
                <div class="u-text-center">
                    <a href="#" class="btn-text testimonial">Read more &rarr;</a>
                </div>
            </div>
        </section>