<?php
get_header();
$category = get_queried_object();
?>
<section class="section-hero overlay inner-page bg-image single-job-page" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"><?php echo $category->name; ?></h1>
            <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
          </div>
        </div>
      </div>
    </section>
<?php 
$jobs = new WP_Query( array( 'post_type' => 'jobs' ,'cat'=> $category->term_id ) );                
if ( $jobs->have_posts() ) { ?>    

<section class="site-section" id="next">
<div class="container">

  <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2"><?php
              $the_query = new WP_Query( array(
                'post_type' => 'jobs',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'id',
                        'terms' => $category->term_id
                    )
                )
            ) );
            $count = $the_query->found_posts;
              echo $count;
            ?> Jobs Listed</h2>
          </div>
        </div>
  
  <ul class="job-listings mb-5">
          <?php
          $category = get_queried_object();
            $the_query = new WP_Query( array('posts_per_page'=>4,
                  'post_type'=>'jobs', 'cat'         => $category->term_id,
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
          <?php
            // $from = ($the_query->query_vars['posts_per_page'] * $paged) - ($the_query->query_vars['posts_per_page'] - 1);
            // if(($the_query->query_vars['posts_per_page'] * $paged) <= ($the_query->found_posts)){
            //   $to = ($the_query->query_vars['posts_per_page'] * $paged);
            // }else{
            //   $to = $the_query->found_posts;
            // }
            // if($from == $to){
            //   $from_to = $from;
            // }else{
            //   $from_to = $from.' - '.$to;
            // }
          ?>
          
    
    

  <!-- <div class="row pagination-wrap">
    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
      <span>Showing 1-7 Of 43,167 Jobs</span>
    </div>
    <div class="col-md-6 text-center text-md-right">
      <div class="custom-pagination ml-auto">
        <a href="#" class="prev">Prev</a>
        <div class="d-inline-block">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        </div>
        <a href="#" class="next">Next</a>
      </div>
    </div>
  </div> -->

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