<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title</title>
</head>
<body>
	<div id="app">
		<img :class="gender" :src="picture" :alt="`${firstName} ${lastName}`">
		<h1>{{firstName}} {{lastName}}</h1>
		<h2>{{email}}</h2>
		<button v-on:click="getUser()">Get random user</button>
		<Test />
	</div>

	<script src="https://unpkg.com/vue@next"></script>
	<script src="<?php echo get_template_directory_uri() . '/src/js/index.js' ?>"></script>
</body>
</html>

<?php if(acf_activated() && have_rows('blocks')) : ?>

	<?php while (acf_activated() && have_rows('blocks')) : the_row(); ?>
		<?php $block_type = get_row_layout();?>

		<?php include(locate_template('blocks/' . $block_type . '.php')); ?>
	<?php endwhile; ?>

<?php endif; ?>

