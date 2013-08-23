<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Amaya Theme
 * @since Amaya Theme 1.0
 */
?>

		</div>
        <!-- End main container -->
    </div>
    <!-- End falling-flowers -->

    <div class="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-4">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="">Menu &ndash; Lunch</a></li>
                    <li><a href="">Menu &ndash; Dinner</a></li>
                    <li><a href="">Events and Specials</a></li>
                </ul>
              </div>

              <div class="col-lg-4 col-4">
                <ul>
                    <li><a href="">Make a Reservation</a></li>
                    <li><a href="">Order Takeout</a></li>
                    <li><a href="">Catering Service</a></li>
                </ul>
              </div>

              <div class="col-lg-4 col-4">
                <ul>
                    <li><a href="">Location</a></li>
                    <li><a href="">Hours</a></li>
                    <!-- <li>Press</li> -->
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="copyright col-lg-4 col-lg-offset-8">
            	<br>
            	<p>&copy; 2012 &ndash; <script>document.write(new Date().getFullYear())</script><noscript>2013</noscript> Amaya Bar and Grill<br>Rochester, NY Indian Cuisine</p>
            	<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
            </div>
          </div>
    </div>

    <!-- JavaScript plugins (requires jQuery) -->
    <script src="/dependencies/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/dependencies/js/bootstrap.min.js"></script>

    <!-- Optionally enable responsive features in IE8. Respond.js can be obtained from https://github.com/scottjehl/Respond -->
    <script src="/dependencies/js/respond.js"></script>

	<?php wp_footer(); ?>
</body>
</html>