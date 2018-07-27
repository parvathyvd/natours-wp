
<section class="section-card-block">
    <div class="container">
        <div class="u-text-center mb-5">
            <h2 class="heading-secondary">
                Check out our tours for adventurous people
            </h2>
        </div>
        <div class="row">
                <?php $loop =  new WP_Query(array(
                        'post_type' => 'pricing',
                        'orderby'   => 'post_id',
                        'order'     =>  'ASC'
                        )); 
                      while($loop ->have_posts()) : $loop ->the_post(); ?>
                        <div class="col-md-4 col-sm-12">
                            <div class="card-block">
                                <div class="card-block__side card-block__side--front">

                                <?php if ( has_post_thumbnail()) {
                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

                                }
                              ?>
                                    <div class="card-block__picture card-block__picture--1" style="background-image: linear-gradient(<?php the_field('gradient'); ?>), url('<?php echo $large_image_url[0]; ?>'); background-size: cover;background-repeat: no-repeat; height: 15rem; background-blend-mode: screen; clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);">
                                    </div>
                
                                    <div class="card-block__heading">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="card-block__details">
                                        <ul>
                                            <li><?php echo get_field('list_item1'); ?></li>
                                            <li><?php echo get_field('list_item2'); ?></li>
                                            <li><?php echo get_field('list_item3'); ?></li>
                                            <li><?php echo get_field('list_item4'); ?></li>
                                        </ul>
                                    </div>
                                    <div class="card-block__details">
                                    </div>
                                </div>
                    <div class="card-block__side card-block__side--back card-block__side--back-1" style="background-image: linear-gradient(<?php the_field('gradient'); ?>)">
                        <div class="card-block__cta">
                            <div class="card-block__price-box">
                                <p class="card-block__price-only">
                                    Only
                                <p>
                                <p class="card-block__price-value">
                                    <?php echo get_field('price'); ?>
                                </p>
                            </div>
                            <a href="" class="btn btn-white">Tours!</a>
                        </div>
                    </div>
                    </div>
                    </div>
                   <?php endwhile; ?>       
</section>