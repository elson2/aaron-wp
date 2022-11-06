<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Aaron G. Miller</title>
	<link rel="stylesheet" href="/style.css" />

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

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
						<img src="./images/stretch.svg" alt="Icon showing dancer stretching her leg up to her nose." />
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
						<img src="./images/quote.svg" alt="quote sign" class="quote-icon" />
						<blockquote>Respect your talent!</blockquote>
					</div>
					<p class="apply">Apply for an audition now!</p>
				</div>
				<div class="level" id="level-2">
					<div class="icon-circle">
						<img src="./images/up.svg" alt="Icon showing dancer stretching her leg up to her nose." />
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
						<img src="./images/quote.svg" alt="quote sign" class="quote-icon" />
						<blockquote>Thank yourself for levelling up now!</blockquote>
					</div>
					<p class="apply">Registration now open for everybody!</p>
				</div>

				<div class="level" id="level-3">
					<div class="icon-circle">
						<img src="./images/rise.svg" alt="Icon showing dancer stretching her leg up to her nose." />
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
						<img src="./images/quote.svg" alt="quote sign" class="quote-icon" />
						<blockquote>Fall in love with dancing!</blockquote>
					</div>
					<p class="apply">Registration now open for everybody!</p>
				</div>
			</div>
		</section>

		<section id="about">
			<img src="images/aaron_2.jpg" alt="Aaron Miller sideprofile" />
			<div>
				<p class="super-headline">Why I teach</p>
				<h2>Hi, I'm Aaron!</h2>
				<p class="text_about">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque
					incidunt, nihil, recusandae autem aut perferendis reiciendis a neque
					veniam quibusdam animi ex tempora reprehenderit, aspernatur asperiores
					consequatur consectetur ipsum!
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
					<img src="images/aaron_3.jpg" alt="Aaron performing at the Sydney dance festival 2022" ">
          <p class=" text_news">Sydney Dance Festival 2022 is happening!!!</p>
					<a href="" class="button">Read more</a>
				</article>

				<article>
					<h3>
						New London Workshop Oct. 2025
					</h3>
					<img src="images/aaron_4.jpg" alt="Aaron at a workshop" ">
          <p class=" text_news">Bringing a new Workshop to London!! Coming in 2025</p>
					<a href="" class="button">Read more</a>
				</article>

				<article>
					<h3>
						Dance Pool 2023 sold out!
					</h3>
					<img src="images/dance_group.jpg" alt="Group picture of Dance Pool" ">
          <p class=" text_news">The Dance Pool is completely sold out! Thank YOU!</p>
					<a href="" class="button">Read more</a>
				</article>

			</div>
		</section>
	</main>

	<footer>
		<div>
			<h4>Thank you for your interest in Art!</h4>
			<p>© 2004 – Aaron G. Miller</p>
		</div>
		<div>
			<a href="#">Imprint & Privacy</a>
			<p onclick="toggleSources()">Sources (click)</p>
			<div id="sources">
				<ul>
					<li>
						<a href="https://commons.wikimedia.org/wiki/File:DANCE_-Grupo_de_Rua,%22Inoah,%22_at_Brooklyn_Academy_of_Music_(49020288773).jpg">header picture</a>
					</li>
					<li>
						<a href="https://commons.wikimedia.org/wiki/File:Cheng_Tsung_Lung.jpg">about picture</a>
					</li>
					<li>
						<a href="https://commons.wikimedia.org/wiki/File:Meredith_Monk_-On_Behalf_of_Nature-Brooklyn_Academy_of_Music(15822608589).jpg">news 1 picture</a>
					</li>
					<li>
						<a href="https://commons.wikimedia.org/wiki/File:DANCE_-Grupo_de_Rua,%22Inoah,%22_at_Brooklyn_Academy_of_Music_(49021032627).jpg">news 2 picture</a>
					</li>
					<li>
						<a href="https://commons.wikimedia.org/wiki/File:Meredith_Monk_-On_Behalf_of_Nature-Brooklyn_Academy_of_Music(15822608589).jpg">news 3 picture</a>
					</li>
				</ul>
				<p>Yoga Icons by Vitaly Gorbachev:</p>
				<ul>
					<li>
						<a href="https://www.flaticon.com/free-icon/yoga_2043795">up</a>
					</li>
					<li>
						<a href="https://www.flaticon.com/free-icon/yoga_2043787">rise</a>
					</li>
					<li>
						<a href="https://www.flaticon.com/free-icon/yoga_2043799">stretch</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
	<script src="./main.js"></script>
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