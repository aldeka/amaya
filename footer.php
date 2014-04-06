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
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li><a href="http://www.orderstart.com/amayabarandgrill">Menu</a></li>
                    <!--<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>events/">Events and Specials</a></li>-->
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>reservations/">Make a Reservation</a></li>
                    <li><a href="http://www.orderstart.com/amayabarandgrill">Order Takeout</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catering/">Catering Service</a></li>
                </ul>
              </div>

              <div class="col-lg-4 col-4">
                <ul>
                	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/#location">Location</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/#hours">Hours</a></li>
                    <!-- <li>Press</li> -->
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/#contact">Contact Us</a></li>
                </ul>
              </div>
                <div class="col-lg-4 col-4">
                	<p>&copy; 2012 &ndash; <script>document.write(new Date().getFullYear())</script><noscript>2013</noscript> Amaya Bar and Grill<br>
                        Rochester, NY Indian Cuisine<br>
                        Serving lunch and dinner six days a week<br><br>
                        585-241-3223</p>
                </div>
            </div>
          </div>
    </div>

    <!-- JavaScript plugins (requires jQuery) -->
    <script src="<?php echo get_template_directory_uri(); ?>/dependencies/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/dependencies/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
