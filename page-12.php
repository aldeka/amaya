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
                    <span class="col-sm-12 col-lg-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>menu/"><button class="btn btn-large">View menu</button></a></span>
                    <span class="col-sm-6 col-lg-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>reservations/"><button class="btn btn-large btn-primary">Make a reservation</button></a></span>
                    <span class="col-sm-6 col-lg-12"><a href="<?php echo esc_url( home_url( '/' ) ); ?>takeout/"><button class="btn btn-large btn-primary">Order takeout</button></a></span>
                </p>
              </div>
              <div class="col-lg-4 col-lg-push-4 col-sm-6 col-6">
                <div class="highlight">
                <h3>Hours</h3>
                <h4>Tuesday &ndash; Saturday:</h4>
                <p>11:30 am &ndash; 2:30 pm
                    <br>5 pm &ndash; 10 pm</p>
                <h4>Sunday:</h4>
                <p>11:30 am &ndash; 2:30 pm
                    <br>5 pm &ndash; 9 pm</p>
                <p><em>Closed Mondays</em></p>
                </div>

              </div>
              <div class="col-lg-4 col-lg-pull-4 col-sm-6 col-6">
                <div class="highlight">
                <h3>Address</h3>
                <p>Tops Brighton Plaza <a href="">(map)</a><br>
                1900 Clinton Ave. S<br>
                Rochester, NY 14618</p>
                <p>585-241-3223</p>
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
                            <div class="col-lg-4 col-sm-6">
                                <img class="img-responsive" src="http://placekitten.com/600/400">
                            </div>
                            <div class="col-lg-8 col-sm-6">
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
                <a class="col-12 social-media facebook">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" class="img-responsive"/>
                    <span>Like Amaya on Facebook</span>
                </a>
                <a class="col-12 social-media twitter">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" class="img-responsive"/>
                    <span>Follow Amaya on Twitter</span>
                </a>
                <a class="col-12 social-media yelp">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/yelp.png" class="img-responsive"/>
                    <span>Review Amaya on Yelp</span>
                </a>
                <a class="col-12 social-media urbanspoon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/urbanspoon.png" width="90" class="img-responsive"/>
                    <span>Review Amaya on Urbanspoon</span>
                </a>
                <a class="col-12 social-media tripadvisor">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tripadvisor.png" width="90" class="img-responsive"/>
                    <span>Review Amaya on Tripadvisor</span>
                </a>
                <div class="clearer">&nbsp;</div>
              </div>

              <div class="col-sm-6 col-lg-4 col-lg-pull-4">
                <h3>Upcoming Events</h3>
                <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=5bb3675gj99pf09n2g3jjgscf8%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="280" height="350" frameborder="0" scrolling="no"></iframe>
                <br>
              </div>
              <div class="mailing-list col-sm-12 col-lg-4 col-lg-pull-4">
                <h3>Join our mailing list!</h3>
                <!-- Begin MailChimp Signup Form -->

                <form action="http://amayabarandgrill.us2.list-manage2.com/subscribe/post?u=654e8acd30fe473306b41e3fe&amp;id=ce904dbb8b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                    <input value="" name="EMAIL" class="textfield" placeholder="Email address" id="mce-EMAIL" type="email">&nbsp;<input value="Go" name="subscribe" id="mc-embedded-subscribe" class="button button_go btn" type="submit">

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                </form>
                <p class="helptext">To sign up for our newsletter and special offers, enter your email address into the box above. You can unsubscribe at any time.</p>
                <!--End mc_embed_signup-->
                 <br>
              </div>
            </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>