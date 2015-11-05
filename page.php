<?php

get_header(); ?>
<!-- section.about -->
<section id="about">
	<div class="wrapper flex column">

	<h2>About</h2>

	<?php $aboutQuery = new WP_query(
		array(
				'post_type'=>'about'
			)
	); ?>

		<div class="flex aboutContent">

			<?php if ($aboutQuery->have_posts()): ?>
				<?php while($aboutQuery->have_posts()): $aboutQuery->the_post(); ?>
				<div class="aboutImg wow animated slideInLeft"><?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="aboutText wow animated slideInRight">
					<p><?php the_content(); ?></p>
				</div>
				<?php endwhile ?>
					<?php wp_reset_postdata(); ?>
			<?php endif ?>
		</div>

	</div>
</section>
<!-- /section.about -->

<!-- section.recent -->
<section id="work">
	<div class="wrapper flex">

	<h2>Recent Work</h2>

		<?php $workQuery = new WP_query(
			array(
					'post_type'=>'work',
					'cat'=>3
				)
		); ?>

			<?php if ($workQuery->have_posts()): ?>
				<?php while($workQuery->have_posts()): $workQuery->the_post(); ?>
					<div class="works flex column">
						<h3><a target="_blank" href="http://<?php the_field('live_demo');?>
									"><?php the_title( ) ?></h3></a>
						<div class="worksPair flex animated fadeIn wow">
							<div class="worksImg wow slideInLeft"><?php the_post_thumbnail('large'); ?></div>
								<div class="worksText wow slideInRight flex column">
									<div class="worksP"><?php the_content( );?></div>
									<div class="worksButtons flex">
										<a class="liveDemo button" target="_blank" href="http://<?php the_field('live_demo');?>
										">Live Demo</a>
										<?php  
										$image = get_field('source');
										if($image) : 
											?>
											<!-- <a class="button source" href=""> -->
										<a class="source button" target="_blank" href="http://<?= $image ?>
										">Source</a>
									<?php endif ?>
								</div>
							</div>
						</div>
					</div>
			<?php endwhile ?>
		<?php wp_reset_postdata(); ?>
	<?php endif ?>

	</div>
</section>
<!-- /section.recent -->

<!-- section.skills -->
<section id="skills">
	<div class="wrapper column flex">

		<h2>Skills</h2>
			<div class="skillsFlex flex row">
				<?php $skillQuery = new WP_query(
					array(
							'posts_per_page'=>-1,
							'post_type'=>'skill'
						)
				); ?>
	
					<?php if ($skillQuery->have_posts()): ?>
						<?php while($skillQuery->have_posts()): $skillQuery->the_post(); ?>
						<div class="skillsImg wow animated fadeIn"><span class="hint--top hint--warning" data-hint="<?php $thumbnail = get_post( get_post_thumbnail_id() );
echo $thumbnail->post_title; ?>">
						<?php the_post_thumbnail('thumbnail'); ?></span>
						</div>
						<?php endwhile ?>
					<?php wp_reset_postdata(); ?>
				<?php endif ?>
		</div>
	</div>
</section>
<!-- /section.skills -->

<!-- section.contact -->
<section id="contact">

	<h2>Contact</h2>

		<div class="wrapper flex">

			<?php $socialQuery = new WP_query(
					array(
							'posts_per_page'=>-1,
							'post_type'=>'social'
						)
					); ?>
			<div class="socialIcons flex">
					<?php if ($socialQuery->have_posts()): ?>
						<?php while($socialQuery->have_posts()): $socialQuery->the_post(); ?>
							
							<a href="<?php the_field('social_link'); ?>"><i class="fa wow animated fadeIn fa-<?php the_field('social_logo'); ?>" data-wow-delay="<?php the_field('social_dly') ?>s"></a></i>
						
						<?php endwhile ?>
					<?php wp_reset_postdata(); ?>
				<?php endif ?>		
			</div>
	
	</div>
</section>
<!-- /section.contact -->

<?php get_footer(); ?>
