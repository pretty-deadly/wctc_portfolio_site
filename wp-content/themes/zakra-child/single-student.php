<?php
/**
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zakra
 */

get_header();
?>

	<main id="zak-primary" class="zak-primary">
		<?php echo apply_filters( 'zakra_after_primary_start_filter', false ); // WPCS: XSS OK. ?>

		<?php
		while ( have_posts() ) :
			the_post();


            get_template_part( 'template-parts/content-single', get_post_type() );?>
            <p class="program-list"><?php echo the_field('program') ?></p>
            <div class="separation-line"></div>
            <h3>Featured Projects</h3>
          <div class="featured-projects">
            <?php
            $projects = ['featured_project_1', 'featured_project_2', 'featured_project_3'];
                foreach ($projects as $project) {
                $featuredProject = get_field($project);
                    if ($featuredProject) {
            $caption = wp_get_attachment_caption($featuredProject);
                echo '<div class="project">';
                echo wp_get_attachment_image($featuredProject, 'large');
            echo $caption ? "<p class='project-title'>$caption</p>" : '';
            echo '</div>';
                    }
                }
                ?>
            </div>
        <div class="portfolio-link">
            <a href="<?php echo esc_attr( get_field('portfolio_url') ); ?>">View <?php echo get_the_title();?>'s Portfolio</a>
        </div>

        <?php

            do_action( 'zakra_after_single_post_content' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<?php echo apply_filters( 'zakra_after_primary_end_filter', false ); // // WPCS: XSS OK. ?>
	</main><!-- /.zak-primary -->

<?php
get_sidebar();
get_footer();
