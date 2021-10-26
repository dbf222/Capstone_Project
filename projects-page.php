<?php
/* Template Name: Projects */
get_header(); ?>


  <div class="home-container projects-container">
    <div class="home-hero " id="projects-hero" <?php if (has_post_thumbnail()) : ?> style="background-image: url('<?php the_post_thumbnail_url(); ?>');" <?php endif; ?>>
        <div class="hero-content" id="project_hero_content">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <h2 class="green-heading"><?php the_title(); ?></h2>
                    <h3 class="tagline">
                      <?php
                      echo get_field('tagline');
                      ?>
                    </h3>


            <?php
                }
            }
            ?>
      </div>
    </div>
  </div>


  <section class="projects-main">

    <div class="hero-info projects-info">
        <?php the_content(); ?>
    </div>

    <div class="project_main_content">

      <div class="project_page_title">
        <?php  echo get_field('project_page_title'); ?>
        <hr class="">
      </div>

      <div id="post_flexbox">

        <?php $query = new WP_Query( array( 'category_name' => 'projects' ) );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                    $query->the_post();
          ?>

          <div class="individual_post ">

            <?php the_post_thumbnail('medium'); ?>

              <div class="projects_content">
                <?php  echo "<h4>" . get_the_title() . "</h4>";
                                     the_excerpt();
                 ?>
                 <a class="red_button" href="<?php the_permalink(); ?>">Learn More</a>

              </div>

            </div>

            <?php
                }
              }
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
