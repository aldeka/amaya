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
                    <li><a href="<?php echo get_template_directory_uri(); ?>">Home</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>menu/lunch/">Menu &ndash; Lunch</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>menu/dinner/">Menu &ndash; Dinner</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>events/">Events and Specials</a></li>
                </ul>
              </div>

              <div class="col-lg-4 col-4">
                <ul>
                    <li><a href="<?php echo get_template_directory_uri(); ?>reservations/">Make a Reservation</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>takeout/">Order Takeout</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>catering/">Catering Service</a></li>
                </ul>
              </div>

              <div class="col-lg-4 col-4">
                <ul>
                	<li><a href="<?php echo get_template_directory_uri(); ?>about-us/">About Us</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>about-us/#location">Location</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>about-us/#hours">Hours</a></li>
                    <!-- <li>Press</li> -->
                    <li><a href="<?php echo get_template_directory_uri(); ?>about-us/#contact">Contact Us</a></li>
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