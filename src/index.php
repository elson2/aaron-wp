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
				<div class="level" id="level-1">
					<div class="icon-circle">
						<img src="<?php echo get_template_directory_uri(); ?>/images/stretch.svg" alt="Icon showing dancer stretching her leg up to her nose." />
						<p>3</p>
					</div>

					<div class="level-text">
						<div>
							<h3>As pro as you can get</h3>
							<p>
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit
								consectetur maxime excepturi. Excepturi, cumque eum!
							</p>
						</div>
						<a href="#" class="button">Book Workshop</a>
					</div>

					<div class="quote-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="quote sign" class="quote-icon" />
						<blockquote>Respect your talent!</blockquote>
					</div>
					<p class="apply">Apply for an audition now!</p>
				</div>
				<div class="level" id="level-2">
					<div class="icon-circle">
						<img src="<?php echo get_template_directory_uri(); ?>/images/up.svg" alt="Icon showing dancer stretching her leg up to her nose." />
						<p>2</p>
					</div>

					<div class="level-text">
						<div>
							<h3>Aspire more</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Asperiores esse voluptas soluta voluptates laborum non dignissimos
								odit et dolores nemo?
							</p>
						</div>
						<a href="#" class="button">Book Workshop</a>
					</div>

					<div class="quote-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="quote sign" class="quote-icon" />
						<blockquote>Thank yourself for levelling up now!</blockquote>
					</div>
					<p class="apply">Registration now open for everybody!</p>
				</div>

				<div class="level" id="level-3">
					<div class="icon-circle">
						<img src="<?php echo get_template_directory_uri(); ?>/images/rise.svg" alt="Icon showing dancer stretching her leg up to her nose." />
						<p>1</p>
					</div>

					<div class="level-text">
						<div>
							<h3>Learn the Basics profoundly</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis,
								provident assumenda, rerum iusto impedit cum voluptas enim
								veritatis blanditiis, qui ea pariatur sit?
							</p>
						</div>
						<a href="#" class="button">Book Workshop</a>
					</div>

					<div class="quote-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="quote sign" class="quote-icon" />
						<blockquote>Fall in love with dancing!</blockquote>
					</div>
					<p class="apply">Registration now open for everybody!</p>
				</div>
			</div>
		</section>

		<section id="about">
			<img src="<?php echo get_template_directory_uri(); ?>/images/aaron_2.jpg" alt="Aaron Miller sideprofile" />
			<div>
				<p class="super-headline">Why I teach</p>
				<h2>Hi, I'm Aaron!</h2>
				<p class="text_about">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque
					incidunt, nihil, recusandae autem aut perferendis reiciendis a neque
					veniam quibusdam animi
				</p>
				<p class="text_about">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque
					incidunt, nihil, recusandae autem aut perferendis reiciendis a neque
					veniam quibusdam animi ex tempora reprehenderit, aspernatur asperiores
					consequatur consectetur ipsum! Lorem ipsum dolor sit amet consectetur
					adipisicing elit.
				</p>
				<a>Learn more</a>
			</div>
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