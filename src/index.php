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
			<a href="#" class="button">Book Workshop</a>
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
							<p class="apply">Apply for an audition now!</p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>


			</div>
		</section>

		<section id="about">
			<?php
			$aboutme_query = new WP_Query(array('p' => 8));
			if ($aboutme_query->have_posts()) :
				while ($aboutme_query->have_posts()) : $aboutme_query->the_post();
			?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/aaron_2.jpg" alt="Aaron Miller sideprofile" />
					<div>
						<p class="super-headline"><?php echo get_post_custom_values('super-headline')[0] ?></p>
						<h2><?php the_title(); ?></h2>
						<p class="text_about">
							<?php the_content(); ?>
						</p>
						<a>Learn more</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</section>
		<section id="news">
			<p class="super-headline">Making waves since 2004</p>
			<h2>In the News</h2>
			<div class="articles">


				<article>
					<h3>
						Sydney Dance Festival 2022
					</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/images/aaron_3.jpg" alt="Aaron performing at the Sydney dance festival 2022" ">
          <p class=" text_news">Sydney Dance Festival 2022 is happening!!!</p>
					<a href="" class="button">Read more</a>
				</article>

				<article>
					<h3>
						New London Workshop Oct. 2025
					</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/images/aaron_4.jpg" alt="Aaron at a workshop" ">
          <p class=" text_news">Bringing a new Workshop to London!! Coming in 2025</p>
					<a href="" class="button">Read more</a>
				</article>

				<article>
					<h3>
						Dance Pool 2023 sold out!
					</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/images/dance_group.jpg" alt="Group picture of Dance Pool" ">
          <p class=" text_news">The Dance Pool is completely sold out! Thank YOU!</p>
					<a href="" class="button">Read more</a>
				</article>

			</div>
		</section>
	</main>
	<?php get_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
			MainNav.init();
		});

		function toggleSources() {
			let div = document.getElementById("sources");
			if (div.style.display === "none") {
				div.style.display = "block";
			} else {
				div.style.display = "none";
			}
		}
	</script>
	<?php wp_footer(); ?>
</body>

</html>