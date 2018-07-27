<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Theme
 */

?>
</main>

<footer class="footer">
    <div class="footer__logo-box">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-green-1x.png" alt="" class="footer__logo" id="footer-logo" onclick="toggleLogo();">
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="footer__navigation">
                <ul class="footer__list">
                    <li class="footer__item"><a href="" class="footer__link">Company</a></li>
                    <li class="footer__item"><a href="" class="footer__link">Contact Us</a></li>
                    <li class="footer__item"><a href="" class="footer__link">Carrers</a></li>
                    <li class="footer__item"><a href="" class="footer__link">Privacy</a></li>
                    <li class="footer__item"><a href="" class="footer__link">Terms</a>/li>
                </ul>
            </div>
        </div>
        <div class="col-sm-2 offset-sm-4">
            <div class="footer__navigation">
                <p class="footer__copyright">
                    Web development by &nbsp;<a href="http://parvathy.vd.realwordpressdevelopment.com/" class="footer__link"> Parvathy</a>&nbsp; Designed and guide me by &nbsp;
                    <a class="footer__link" href="http://codingheroes.io/"> Jonas Schmedtmann</a>
                </p>
            </div>
        </div>
    </div>

</footer>

</body>

<script src="js/custom.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>


<?php wp_footer(); ?>

</body>
</html>
