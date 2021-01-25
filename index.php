<?php get_header(); ?>

<?php if ( is_page() && !is_front_page() ) : ?>
	<div class="component page-title">
		<div class="wrapper">
			<h1 class="title"><?php the_title(); ?></h1>
		</div>
	</div>
<?php endif; ?>

	<?php if(acf_activated() && have_rows('blocks')) : ?>

		<?php while (acf_activated() && have_rows('blocks')) : the_row(); ?>
			<?php $block_type = get_row_layout();?>

			<?php include(locate_template('blocks/' . $block_type . '.php')); ?>
		<?php endwhile; ?>

	<?php endif; ?>

<?php get_footer(); ?>
