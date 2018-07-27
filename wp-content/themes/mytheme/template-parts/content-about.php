
<?php 

$image1  = get_field('image1'); 
$image2  = get_field('image2'); 
$image3  = get_field('image3'); 

?>



<section class="section-about">
    <div class="u-text-center mb-5">
        <h2 class="heading-secondary">
            <?php echo get_field('about_heading'); ?>
        </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h3 class="heading-tertiary mb-3"><?php echo get_field('subheading1'); ?></h3>
                <p class="paragraph"><?php echo get_field('description1'); ?></p>
                <h3 class="heading-tertiary mb-3"><?php echo get_field('subheading2'); ?></h3>
                <p class="paragraph"><?php echo get_field('description2'); ?></p>
                <a href="#" class="btn btn-text"><?php echo get_field('button_text'); ?> &rarr;</a>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="composition mt-5">
                    <img src="<?php echo $image1['url'] ?>" alt="photo" class="composition__photo composition__photo--pic1">
                    <img src="<?php echo $image2['url'] ?>" alt="photo" class="composition__photo composition__photo--pic2">
                    <img src="<?php echo $image3['url'] ?>" alt="photo" class="composition__photo composition__photo--pic3">
                </div>
            </div>
        </div>
    </div>
</section>