<?php
/*
Template Name: FAQs
*/

get_header();
?>
<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Frequently Ask Questions</h1>
            <div class="custom-breadcrumbs">
              <a href="index.html">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>FAQ</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="accordion">
      <div class="container">
        
        <div class="row accordion justify-content-center block__76208">
          <div class="col-lg-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sq_img_8.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block h4" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="true" aria-controls="collapseFive">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseFive" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block h4" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">How much pay for 3  months?<span class="icon"></span></a>
              </h3>
              <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block h4" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block h4" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseEight">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseEight" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>

          
        </div>
      </div>
    </section>

    <?php 
$candidates = new WP_Query( array( 'post_type' => 'candidates' ) );  
$published_posts = wp_count_posts('candidates')->publish;        
if ( $candidates->have_posts() && $published_posts > 1) { ?>     

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Happy Candidates Says</h2>
          </div>
        </div>
        <div class="row">
        <?php 
          $args = array('post_type' => 'candidates' );
          $the_query = new WP_Query($args);
          while ($the_query -> have_posts()): $the_query -> the_post();
          ?> 
          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p><?php the_field('candidate_saying'); ?></p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="<?php the_field('candidate_image'); ?>" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3><?php the_field('candidate_name'); ?></h3>
                  <span class="position"><?php the_field('candidate_role'); ?></span>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
      </div>
    </section>
    <?php
      }  
    ?>
    <?php
// get_sidebar();
get_footer();