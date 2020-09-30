<?php
/*
Template Name: Home
*/
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Job_Board
 */

get_header();
?>

	<!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>
            </div>
            
            <form method="post" class="search-jobs-form search" action="<?php echo home_url( '/' ); ?>">
              <div class="row mb-5 justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="search" class="form-control form-control-lg" placeholder="Enter Job title.." name="s"> 
                </div>
                
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2" value="Search"></span>Search Job</button>
                  <input type="hidden" name="post_type" value="jobs">
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-md-12 popular-keywords">
                  <h3>Trending Keywords:</h3>
                  <ul class="keywords list-unstyled m-0 p-0">
                    <li><a href="#" class="">UI Designer</a></li>
                    <li><a href="#" class="">Python</a></li>
                    <li><a href="#" class="">Developer</a></li>
                  </ul>
                </div>
              </div> -->
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>
    
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="1930">0</strong>
            </div>
            <span class="caption">Candidates</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="54">0</strong>
            </div>
            <span class="caption">Jobs Posted</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="120">0</strong>
            </div>
            <span class="caption">Jobs Filled</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="550">0</strong>
            </div>
            <span class="caption">Companies</span>
          </div>

            
        </div>
      </div>
    </section>

    <?php 
$jobs = new WP_Query( array( 'post_type' => 'jobs' ) );                
if ( $jobs->have_posts() ) { ?>       

    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2"><?php
              $count = wp_count_posts( 'jobs' )->publish; 
              echo $count;
            ?> Job Listed</h2>
          </div>
        </div>
        
        <ul class="job-listings mb-5">

          <?php 
          $args = array('post_type' => 'jobs', 'posts_per_page' => 5 );
          $the_query = new WP_Query($args);
          while ($the_query -> have_posts()): $the_query -> the_post();
          ?> 

          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="<?php echo get_permalink(); ?>"></a>
            <div class="job-listing-logo">
              <img src="<?php the_field('company_logo'); ?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2><?php the_field('job_title'); ?></h2>
                <strong><?php the_field('company_name'); ?></strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> <?php the_field('city'); ?>
              </div>

              <?php 
              if( get_field('job_type') == 'Full Time' ) {
                ?>
                  <div class="job-listing-meta">
                    <span class="badge badge-success"><?php the_field('job_type'); ?></span>
                  </div>
                <?php
              }
              else{
                ?>
                  <div class="job-listing-meta">
                    <span class="badge badge-danger"><?php the_field('job_type'); ?></span>
                  </div>
                <?php
              }
              ?>

              
            </div>
            
          </li>
          <?php endwhile; ?>

        </ul>

        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo get_template_directory_uri(); ?>.'/job-listings" class="btn btn-primary float-right btn-md">View More Jobs</a>
            </div>
        </div>

      </div>
    </section>
    <?php 
       }else{
         ?>
         <section class="site-section">
            <div class="container">
              <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                  <h2 class="section-title mb-2">No Jobs Listed</h2>
                  <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
                </div>
              </div>
            </div>
          </section>
         <?php
       } 
    ?>   
    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>

    
    <?php 
$helped_companies = new WP_Query( array( 'post_type' => 'helped_companies' ) );                
if ( $helped_companies->have_posts() ) : ?>      
    <section class="site-section py-4">
      <div class="container">
  
        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Company We've Helped</h2>
                <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
              </div>
            </div>
            
          </div>
          <?php 
          $args = array('post_type' => 'helped_companies', 'posts_per_page' => 8 );
          $the_query = new WP_Query($args);
          while ($the_query -> have_posts()): $the_query -> the_post();
          ?>  
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="<?php the_field('company_logo'); ?>" alt="Image" class="img-fluid company-logo <?php the_title(); ?>">
          </div>
          <?php endwhile; ?>

        </div>
      </div>
    </section>
<?php endif; ?>   
  
    <section class="bg-light pt-5 testimony-full">
    
        <div class="owl-carousel single-carousel">

        <?php 
        $args = array('post_type' => 'testimonials', 'posts_per_page' => -1 );
        $the_query = new WP_Query($args);
        while ($the_query -> have_posts()): $the_query -> the_post();
        ?>  

            <div class="container">
              <div class="row">
                <div class="col-lg-6 align-self-center text-center text-lg-left">
                  <blockquote>
                    <p>&ldquo;
                      <?php the_field('testimonial'); ?>
                    &rdquo;</p>
                    <p><cite> &mdash; <?php the_field('customer_name'); ?></cite></p>
                  </blockquote>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-right">
                  <img src="<?php the_field('customer_image'); ?>" alt="Image" class="img-fluid mb-0">
                </div>
              </div>
            </div>

          <?php endwhile; ?>
          
      </div>

    </section>

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-white">Get The Mobile Apps</h2>
            <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
            <p class="mb-0">
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
            </p>
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            <img src="<?php echo get_template_directory_uri(); ?>/images/apps.png" alt="Free Website Template by Free-Template.co" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
<?php
// get_sidebar();
get_footer();
