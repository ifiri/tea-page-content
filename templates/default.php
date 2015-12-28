<?php if(isset($entries) && count($entries)) :  ?>

<section class="tpc-block tpc-default">
	<?php foreach ($entries as $key => $entry) : ?>
		<article class="tpc-entry-block">
			<?php if(isset($instance['thumbnail']) && $instance['thumbnail'] !== 'false' && $entry['thumbnail']) : ?>
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