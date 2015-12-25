<?php if(isset($entries) && count($entries)) : ?>

<section class="tpc-block tpc-default">
	<?php if(isset($instance['title'])) : ?>
	<header class="tpc-widget-title">
		<h3><?php echo $instance['title'] ?></h3>
	</header>
	<?php endif; ?>

	<?php foreach ($entries as $key => $entry) : ?>
		<article class="tpc-entry-block">
			<?php if(isset($instance['thumbhail']) && $instance['thumbhail'] !== 'false' && $entry['thumbnail']) : ?>
				<?php echo $entry['thumbnail'] ?>
			<?php endif; ?>

			<div class="tpc-body">
				<h3 class="tpc-title"><?php echo $entry['title'] ?></h3>
				<div class="tpc-content post-content">
					<?php echo $entry['content'] ?>
				</div>
			</div>
			
		</article>
	<?php endforeach; ?>
</section>

<?php endif;