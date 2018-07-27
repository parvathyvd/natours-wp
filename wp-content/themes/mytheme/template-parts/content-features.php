    
    
    <section class="section-features">
          <div class="container">
            <div class="row">
                      <?php $loop =  new WP_Query(array(
                        'post_type' => 'feature',
                        'orderby'   => 'post_id',
                        'order'     =>  'ASC'
                        )); 
                      while($loop ->have_posts()) : $loop ->the_post(); ?>
                        <div class="col-md-3 col-sm-12">
                          <div class="feature-box">
                          <i class="feature-box__icon <?php the_field('choice'); ?>"></i>
                          <h3 class="heading-tertiary"><?php the_title(); ?></h3>
                          <p class="feature-box__text"><?php the_content(); ?></p>
                        </div>              
                      </div>
                   <?php endwhile; ?>
            </div>
          </div>
        </section>