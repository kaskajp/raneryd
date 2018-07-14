<?php require_once('header.php'); ?>

<ul class="feed">
	<?php $years = preg_grep('/^([^.])/', scandir('feed', SCANDIR_SORT_DESCENDING)); ?>
	<?php foreach($years as $year): ?>
		<li class="year">
			<ul class="months">
				<?php
					$months = preg_grep('/^([^.])/', scandir('feed/'.$year, SCANDIR_SORT_DESCENDING));
					$m = 0;
				?>
				<?php foreach($months as $month): ?>
					<li class="month">
						<div class="time-header <?php if($m == 0) { echo 'with-year'; } ?>">
							<?php if($m == 0): ?>
								<span class="year-name"><?php echo $year; ?></span>
							<?php endif; ?>
							<span class="month-name"><?php echo date("F", mktime(0, 0, 0, $month, 10)); ?></span>
						</div>
						<ul class="posts">
							<?php $posts = preg_grep('/^([^.])/', scandir('feed/'.$year.'/'.$month, SCANDIR_SORT_DESCENDING)); ?>
							<?php foreach($posts as $post): ?>
								<li class="post">
									<?php $file = file('feed/'.$year.'/'.$month.'/'.$post); ?>
									<?php if(rtrim($file[1]) == "link_only"): ?>
										<h2 class="post-title"><a href="<?php echo rtrim($file[2]); ?>"><?php echo substr($file[0], 2); ?></a></h2>
									<?php else: ?>
										<h2 class="post-title"><a href="article/<?php echo $year . '/' . $month . '/' . strtok($post, '-') . '/' . preg_replace('/^[^-]*-\s*/', '', substr($post, 0, -3)); ?>"><?php echo substr(rtrim($file[0]), 2); ?></a></h2>
									<?php endif; ?>
									<div class="post-date"><?php echo ordinal(strtok($post, '-')); ?></div>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
					<?php $m++; ?>
				<?php endforeach; ?>
			</ul>
		</li>
	<?php endforeach; ?>
</ul>

<?php require_once('footer.php'); ?>
