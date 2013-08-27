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
                <div class="col-lg-12 col-12">
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
                <?php include 'hours.php'; ?>
                </div>

              </div>
              <div class="col-lg-4 col-lg-pull-4 col-sm-6 col-6">
                <div class="highlight">
                <h3>Address</h3>
                <?php include 'address.php'; ?>
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

            <div class="section row promotions">
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

            <div class="section row">

              <div class="col-sm-6 col-lg-4 col-lg-push-8">
                <?php include 'socialmedia.php'; ?>
                <div class="clearer">&nbsp;</div>
              </div>

              <div class="col-sm-6 col-lg-4 col-lg-pull-4">
                <h3>Upcoming Events</h3>
                <?php include 'calendar.php'; ?>
                <br>
              </div>
              <div class="mailing-list col-sm-12 col-lg-4 col-lg-pull-4">
                <h3>Join our mailing list!</h3>
                <?php include 'mailinglist.php'; ?>
                 <br>
              </div>
            </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
