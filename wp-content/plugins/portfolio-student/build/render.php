<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
/**
 * @var array $attributes Attributes from the block
 * @var string $content The HTML returned from the save() function
 * @var WP_Block $block All the details about this instance
 */


$query = new WP_Query([
	'post_type' => 'student',
	'orderby' => 'post_title',
	'order' => 'asc',
]);

?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<?php while($query->have_posts()):
		$query->the_post();
		?>
	<div class="card__collection clear-fix" style="background-color: <?= $attributes['cardColor'] ?>">
		<div class="cards cards--two">
			<a href="<?php get_the_permalink(); ?>">
			<div class=" img img-responsive">
				<?= get_the_post_thumbnail() ?>
			</div>
			<span class="cards--two__rect"></span>
			<span class="cards--two__tri"></span>
			<p class="name" style="color: <?= $attributes['headingColor'] ?>"><?= get_the_title() ?></p>
			<ul class="cards__list">
				<li class="program"><?php the_field('program'); ?></li>
			</ul>
			</a>
		</div>
	</div>
	<?php endwhile; ?>
</div>


