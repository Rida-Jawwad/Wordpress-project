<?php

get_header();
?>
<section class="section-hero overlay inner-page bg-image single-job-page" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"><?php the_title(); ?></h1>
            <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
                <img src="<?php the_field('company_logo'); ?>" alt="Image">
              </div>
              <div>
                <h2><?php the_field('job_title'); ?></h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php the_field('company_name'); ?></span>
                  <span class="m-2"><span class="icon-room mr-2"></span><?php the_field('city'); ?></span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span>

                    <?php 
                    if( get_field('job_type') == 'Full Time' ) {
                    ?>

                        <span class="text-primary"><?php the_field('job_type'); ?></span>

                    <?php
                    }
                    else{
                        ?>
                        <span class="text-danger"><?php the_field('job_type'); ?></span>
                        <?php
                    }
                    ?>

                </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <!-- <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
              </div> -->

                <div class="col-lg-12">
                    <a href="#job-application-section" class="btn btn-primary float-right btn-md scroll-button smoothscroll">Apply Now</a>
                </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <figure class="mb-5"><img src="<?php echo get_template_directory_uri(); ?>/images/job_single_img_1.jpg" alt="Image" class="img-fluid rounded custom-job-single-image-css"></figure>
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
                <?php the_field('job_desscription'); ?>
            </div>
            <?php
                if(get_field( 'responsibilities')){
                    ?>
                        <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
                        <!-- <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
                        </ul> -->
                        <?php the_field('responsibilities'); ?>
                        </div>
                    <?php
                }
            ?>
            <?php
                if(get_field( 'education_and_experience')){
                    ?>
                        <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
                        <?php the_field('education_and_experience'); ?>
                        </div>
                    <?php
                }
            ?>
            <?php
                if(get_field( 'other_benefits')){
                    ?>
                        <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
                        <?php the_field('other_benefits'); ?>
                        </div>
                    <?php
                }
            ?>
           

            <!-- <div class="row mb-5">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
              </div>
            </div> -->

          </div>
          <div class="col-lg-4">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0 ml-0">
                <li class="mb-2"><strong class="text-black">Published on:</strong> <?php the_field('add_publishing_date'); ?></li>
                <li class="mb-2"><strong class="text-black">Vacancy:</strong> <?php the_field('vacancy'); ?></li>
                <li class="mb-2"><strong class="text-black">Employment Status:</strong> <?php the_field('job_type'); ?></li>
                <li class="mb-2"><strong class="text-black">Experience:</strong> <?php the_field('experience_required'); ?></li>
                <li class="mb-2"><strong class="text-black">Job Location:</strong> <?php the_field('city'); ?></li>
                <li class="mb-2"><strong class="text-black">Salary:</strong> <?php the_field('salary'); ?></li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> <?php the_field('gender'); ?></li>
                <li class="mb-2"><strong class="text-black">Application Deadline:</strong> <?php the_field('application_deadline'); ?></li>
                </ul>
            </div>
            
              <?php 
                $terms = get_the_terms( $post->ID , 'category' );
                $posttags = get_the_tags($post->ID,'job_tag');
                
                if ( is_array( $terms ) && ! is_wp_error( $terms ) || is_array( $posttags ) && ! is_wp_error( $posttags )) {
              ?>
                <div class="bg-light p-3 border rounded">
                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Taxonomies:</h3>
                <div class="px-3">
                <ul class="list-unstyled mb-0 ml-0">
              <?php

                if ( is_array( $terms ) && ! is_wp_error( $terms )){
                  ?>
                    <li class="mb-2"><strong class="text-black">Categories:</strong><br>
                  <?php
                  foreach ($terms as $term) {
                    $term_link = get_term_link($term, 'category');
                    if (is_wp_error($term_link))
                        continue;
                        
                    echo '<a href="' . $term_link . '" class="pt-3 pb-3 pr-3 pl-0" style="color:#7f848c;">' . $term->name . '</a><br> ';
                    
                    
                }
                ?>
                  </li>
                <?php
                }
                
              ?>
              <?php

              if ( is_array( $posttags ) && ! is_wp_error( $posttags )){
                ?>
                  <li class="mb-2"><strong class="text-black">Tags:</strong>
                <?php
                foreach ($posttags as $tag) {
                  $tag_link = get_term_link($tag, 'tag');
                  echo '<a href="' . $tag_link . '" class="pt-3 pb-3 pr-1 pl-0" style="color:#7f848c;">' . $tag->name. '</a>';
                  // $posttags_count = end($posttags);
                  
              }
              ?>
                </li>
              <?php
              }

              ?>
                    </ul>
                  </div>
                </div>
              <?php
                }
              ?>
                
              

            

          </div>
        </div>
      </div>
    </section>

    <section class="site-section pb-0 pt-0" id="job-application-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="<?php echo get_template_directory_uri(); ?>/images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Apply For This Job</h2>
            <?php  
                echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]');
              ?>
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
            ?> Related Jobs</h2>
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/apps.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <?php
// get_sidebar();
get_footer();