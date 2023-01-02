<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
	<?php wp_body_open(); ?>
	<header>
		<div class="flex">
			<a href="/" id="aaronLogoLink">
				<h1>Aaron G. Miller <span>| Choreographer</span></h1>
			</a>
			<nav id="mainnav">
				<button id="hamburger" class="closed">
					<span class="line-1"></span>
					<span class="line-3"></span>
				</button>
				<ul>
					<li><a href="#workshops">Workshops</a></li>
					<li><a href="#about">About Me</a></li>
					<li><a href="#news">News</a></li>
				</ul>
			</nav>
		</div>
		<div id="heroText">
			<h2>I believe <br />you can dance.</h2>
			<?php
				$contact_query = new WP_Query(array(
					'pagename' => 'contact', 'posts_per_page' => '1'
				));

				while ($contact_query->have_posts()) : $contact_query->the_post();
			?>
				<a href="<?php the_permalink(); ?>" class="button">Book Workshop</a>

				<?php endwhile; ?>
		</div>
	</header>


	<main>
		<section id="workshops">
			<p class="super-headline">
				Find your entrance level & book a workshop with Aaron
			</p>
			<h2>If you never start, you will never know.</h2>

			<div id="level-grid">
				<?php
				$first = true;
				$level_query = new WP_Query(array(
					'category_name' => 'level ', 'order' => 'ASC',
					'orderby' => 'ID',
				));
				if ($level_query->have_posts()) :
					while ($level_query->have_posts()) : $level_query->the_post();
				?>

						<div class="level" id="level-<?php echo get_post_custom_values('level-id')[0] ?>">
							<div class="icon-circle">
								<?php if (has_post_thumbnail()) {
									the_post_thumbnail();
								}
								?>
								<p><?php echo get_post_custom_values('level')[0] ?></p>
							</div>

							<div class="level-text">
								<div>
									<h3><?php the_title(); ?></h3>
									<p>
										<?php the_content(); ?>
									</p>
								</div>
								<a href="#" class="button">Book Workshop</a>
							</div>

							<div class="quote-container">
								<img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="quote sign" class="quote-icon" />
								<blockquote><?php echo get_post_custom_values('level-slogan')[0] ?></blockquote>
							</div>
							<p class="apply"><?php echo $first ? "Apply for an audition now!" : "Registration now open for everybody!" ?></p>
						</div>
					<?php
						$first = false;
					endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>


			</div>
		</section>

		<section id="about">
			<?php
			$aboutme_query = new WP_Query(array(
				'category_name' => 'about_me', 'posts_per_page' => '1'
			));
			if ($aboutme_query->have_posts()) :
				while ($aboutme_query->have_posts()) : $aboutme_query->the_post();
			?>
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail();
					}
					?>
					<div>
						<p class="super-headline"><?php echo get_post_custom_values('super-headline')[0] ?></p>
						<h2><?php the_title(); ?></h2>
						<div class="text_about">
							<?php the_content(); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="button">Learn more</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</section>
		<section id="news">
			<p class="super-headline">Making waves since 2004</p>
			<h2>In the News</h2>
			<div class="articles">
				<?php
				$news_query = new WP_Query(array(
					'category_name' => 'news ', 'order' => 'ASC',
					'orderby' => 'ID',
				));
				if ($news_query->have_posts()) :
					while ($news_query->have_posts()) : $news_query->the_post();
				?>

						<article>
							<h3>
								<?php the_title(); ?>
							</h3>
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail();
							}
							?>
							<div class=" text_news"><?php the_excerpt(); ?></div>
							<a href="<?php the_permalink(); ?>" class="button">Read more</a>
						</article>

					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
			MainNav.init();
		});
	</script>
	<?php wp_footer(); ?>
</body>

</html>