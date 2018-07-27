<?php
/**
 * Created by PhpStorm.
 * User: parvathyvd
 * Date: 2018-07-25
 * Time: 2:29 PM
 */
?>

<section class="section-book">
    <div class="book">
        <div class="mb-5">
            <h5 class="heading-secondary pl-3">Contact form</h5>
        </div>
        <div class="book__form">
            <form action="#" class="form">
                <div class="form__group">
                    <input type="text" class="form__input" id="name" name="name" placeholder="Name" required>
                    <label for="name" class="form__label">Full Name</label>
                </div>
                <div class="form__group">
                    <input type="email" class="form__input" id="email" name="email" placeholder="Email" required>
                    <label for="email" class="form__label">Email</label>
                </div>
                <div class="form__group">
                    <div class="form__radio-group">
                        <input type="radio" class="form__radio-input" id="small" name="size">
                        <label class="form__radio-label" for="small">
                            <span class="form__radio-button"></span>
                            Small tour group
                        </label>
                    </div>
                    <div class="form__radio-group">
                        <input type="radio" class="form__radio-input" id="large" name="size">
                        <label class="form__radio-label" for="large">
                            <span class="form__radio-button"></span>
                            Large tour group
                        </label>
                    </div>
                </div>
                <div class="u-text-center">
                    <a href="#" class="btn-text testimonial">Submit &rarr;</a>
                </div>
            </form>
        </div>
    </div>
</section>
