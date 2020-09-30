<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Job_Board
 */

get_header();
?>
<section class="section-hero overlay inner-page bg-image single-job-page" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');" id="home-section">
		<div class="container">
			<div class="row">
			<div class="col-md-7">
				<h1 class="text-white font-weight-bold">Search</h1>
				<?php echo get_hansel_and_gretel_breadcrumbs(); ?>
			</div>
			</div>
		</div>
		</section>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

		
		<section class="site-section">
      <div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-md-7 text-center">
						<h2 class="section-title mb-2"><?php
						global $wp_query;
						echo $wp_query->found_posts;
						?> Job Listed</h2>
					</div>
				</div>
				<ul class="job-listings mb-5">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
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
						<?php

					endwhile;
					?>
				</ul>
				</div>
				</section>
			<?php

		else :

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

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
