<?php
/*
Template Name: Contact
*/

get_header();
?>
<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
          <h1 class="text-white font-weight-bold"><?php the_title();?></h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong><?php the_title();?></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="#" class="">

              <!--<div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>-->
            <?php echo do_shortcode('[contact-form-7 id="113" title="contact"]');?>
  
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"><?php the_field('adderess');?></p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="tel:"><?php the_field('phone');?></a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="mailto:"><?php the_field('email');?></a></p>

            </div>
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