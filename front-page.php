<?php get_header(); ?>
/* Template Name: Front-Page */

<div class="home-container">
    <div class="home-hero" <?php if (has_post_thumbnail()) : ?> style="background-image: url('<?php the_post_thumbnail_url(); ?>');" <?php endif; ?>>
        <div class="hero-content">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <h2 class="green-heading"><?php the_title(); ?></h2>

                    <div class="hero-info">
                        <?php the_content(); ?>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <main class="home-main" style="background-image: url('<?php get_background_image(); ?>');">
        <section class="welcome">
            <?php if (get_field('welcome-title')) : ?>
                <h2 class="pink-heading"><?php the_field('welcome-title'); ?></h2>
                <h3 class="blue-heading"><?php the_field('welcome-subtitle'); ?></h3>
                <div class="welcome-description">
                    <p><?php the_field('welcome-description'); ?></p>
                </div>
            <?php endif; ?>
        </section>
        <section class="recent-projects">
            <div class="home-carousel">
                <?php
                echo do_shortcode('[smartslider3 slider="3"]');
                ?>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
