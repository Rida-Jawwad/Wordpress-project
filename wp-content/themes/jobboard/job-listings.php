<?php
/*
Template Name: Job Listings
*/

get_header();
?>
<!-- HOME -->
<section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');" id="home-section">

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

<?php 
$jobs = new WP_Query( array( 'post_type' => 'jobs' ) );                
if ( $jobs->have_posts() ) { ?>    

<section class="site-section" id="next">
<div class="container">

  <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2"><?php
              $count = wp_count_posts( 'jobs' )->publish; 
              echo $count;
            ?> Jobs Listed</h2>
          </div>
        </div>
  
  <ul class="job-listings mb-5">
          <?php
            $the_query = new WP_Query( array('posts_per_page'=>4,
                  'post_type'=>'jobs',
                  'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
            ); 
          ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

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
          <div class="row pagination-wrap">
            <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
              <span><?php
            $pagenum = $the_query->query_vars['paged'] < 1 ? 1 : $the_query->query_vars['paged'];
            $first = ( ( $pagenum - 1 ) * $the_query->query_vars['posts_per_page'] ) + 1;
            $last = $first + $the_query->post_count - 1;
            echo "Showing posts $first - $last of $the_query->found_posts";
          ?></span>
            </div>
            <div class="col-md-6 text-center text-md-right">
              <div class="custom-pagination ml-auto">
              <?php
          $big = 999999999; // need an unlikely integer
          echo paginate_links( array(
             'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
             'format' => '?paged=%#%',
             'current' => max( 1, get_query_var('paged') ),
             'total' => $the_query->max_num_pages
         ) );
         
         wp_reset_postdata();
         ?>
              </div>
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
// get_sidebar();
get_footer();