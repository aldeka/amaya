<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

            <div class="row section splash">
                <div class="col-lg-12 col-12 splash-images">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/interior.jpg"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/chicken.jpg"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/anise.jpg"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/red-drink.jpg"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/salad.jpg"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/lounge.jpg"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/wine.jpg"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/rice.jpg"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/watermelon.png"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/splash/blue-drink.jpg"/>
                    <h2 class="visible-lg"><?php bloginfo( 'description' ); ?></h2>
                    <h2 class="visible-md"><?php bloginfo( 'description' ); ?></h2>
                    <h2 class="visible-sm"><?php bloginfo( 'description' ); ?></h2>
                </div>
            </div>
            <div class="section row details">
              <div class="col-lg-4 col-sm-12">
                <p>
                    <span class="col-sm-12 col-lg-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>menu/" class="btn btn-large">View menu</a></span>
                    <span class="col-sm-6 col-lg-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>reservations/" class="btn btn-large btn-primary">Make a reservation</a></span>
                    <span class="col-sm-6 col-lg-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>takeout/" class="btn btn-large btn-primary">Order takeout</a></span>
                </p>
              </div>
              <div class="col-lg-4 col-lg-push-4 col-sm-6 col-6">
                <div class="highlight">
                <h3>Hours</h3>
                <?php include 'home_page/hours.php'; ?>
                </div>

              </div>
              <div class="col-lg-4 col-lg-pull-4 col-sm-6 col-6">
                <div class="highlight">
                <h3>Address</h3>
                <?php include 'home_page/address.php'; ?>
                </div>
              </div>
            </div>

            <div class="section row">
              <div class="announcements col-lg-12 col-sm-12">
                <div class="highlight">
                <h2>Announcements</h2>
                <?php
                $args = array( 'posts_per_page' => 1 );
                $lastposts = get_posts( $args );
                foreach ( $lastposts as $post ) :
                  setup_postdata( $post ); ?>
                    <?php the_content(); ?>
                <?php endforeach; 
                wp_reset_postdata(); ?>
                </div>
              </div>
            </div>

            <div id="promotions" class="section row promotions">
                <div class="col-lg-12">
                    <div class="highlight">
                        <h2>Promotions</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <?php /* The loop */ ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">

              <div class="col-sm-6 col-lg-4 col-lg-push-8">
                <?php include 'home_page/socialmedia.php'; ?>
              </div>

              <div class="col-sm-6 col-lg-4 col-lg-pull-4">
                <h3>Upcoming Events</h3>
                <?php include 'home_page/calendar.php'; ?>
                <br>
              </div>
              <div class="mailing-list col-sm-12 col-lg-4 col-lg-pull-4">
                <h3>Join our mailing list!</h3>
                <?php include 'home_page/mailinglist.php'; ?>
                 <br>
              </div>
            </div>
            
<script src="<?php echo get_template_directory_uri(); ?>/dependencies/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.splash-images img').hide();
        PIC_COUNT = $('.splash-images img').length;
        CURRENT_PIC = 0;
        $($('.splash-images img')[CURRENT_PIC]).show();

        var picSwitch = function(){;
            var pics = $('.splash-images img');
            $(pics[CURRENT_PIC]).fadeOut(400, function() {
                CURRENT_PIC++;
                if (CURRENT_PIC >= PIC_COUNT) {
                    CURRENT_PIC = 0;
                }
                $(pics[CURRENT_PIC]).fadeIn(600);
            });
        };

        var picSwitcher = window.setInterval(picSwitch, 6000);
    });
</script>

<?php get_footer(); ?>
