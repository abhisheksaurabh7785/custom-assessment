<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://xyz.com
 * @since      1.0.0
 *
 * @package    Abhishek_Tripathi
 * @subpackage Abhishek_Tripathi/public/partials
 */

$image1_url = ABPU . 'public/images/color.webp';
$image2_url = ABPU . 'public/images/1427.png';
$image3_url = ABPU . 'public/images/code2.webp';

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div class="container">
				<div class="container-scroll">
				<section class="hero hero--event item">
					<div class="hero__first">
					<div class="hero__col">
						<h2 class="quote"></h2>
					</div>
					<div class="hero__col">
						<h2 class="quote">We</h2>
					</div>
					</div>

					<div class="hero__second">
					<div class="hero__col">
						<?php echo '<img src="' . esc_url($image1_url) . '" alt="Image 1">';?>
					</div>
					<div class="hero__col">
						<p></p>
					</div>
					</div>
				</section>

				<section class="hero hero--event item snap">
					<div class="hero__first">
					<div class="hero__col">
						<h2 class="quote"></h2>
					</div>
					<div class="hero__col">
						<h2 class="quote">are</h2>
					</div>
					</div>

					<div class="hero__second">
					<div class="hero__col hero__text">
						<h2><a href="#0">SUPERS</a></h2>
					</div>
					<div class="hero__col">
						<p></p>
					</div>
					</div>
				</section>

				<section class="hero hero--studio item">
					<div class="hero__first">
					<div class="hero__col">
						<h2 class="quote">developers</h2>
					</div>
					<div class="hero__col">
						<h2 class="quote">commu.</h2>
					</div>
					</div>

					<div class="hero__second">
					<div class="hero__col hero__pattern">
						<p></p>
					</div>
					<div class="hero__col">
						<p><?php echo '<img src="' . esc_url($image2_url) . '" alt="Image 1">';?></p>
					</div>
					</div>
				</section>

				<section class="hero hero--studio item">
					<div class="hero__first">
					<div class="hero__col">
						<h2 class="quote"></h2>
					</div>
					<div class="hero__col">
						<h2 class="quote"></h2>
					</div>
					</div>

					<div class="hero__second">
					<div class="hero__col hero__text">
						<h2><a href="#0">Studio</a></h2>
					</div>
					<div class="hero__col">
						<p><?php echo '<img src="' . esc_url($image3_url) . '" alt="Image 1">';?></p>
					</div>
					</div>
				</section>

				<section class="hero hero--next item">
					<div class="hero__first">
					<div class="hero__col">
						<h2 class="quote">We</h2>
					</div>
					<div class="hero__col">
						<h2 class="quote">resolve</h2>
					</div>
					</div>

					<div class="hero__second">
					<div class="hero__col hero__pattern">
						<p></p>
					</div>
					<div class="hero__col">
						<p></p>
					</div>
					</div>
				</section>

				<section class="hero hero--next item">
					<div class="hero__first">
					<div class="hero__col">
						<h2 class="quote">bug</h2>
					</div>
					<div class="hero__col">
						<h2 class="quote"></h2>
					</div>
					</div>

					<div class="hero__second">
					<div class="hero__col hero__text">
						<h2><a href="#0">First</a></h2>
					</div>
					<div class="hero__col">
						<p></p>
					</div>
					</div>
				</section>
				</div>
				</div>
				<style>
					:root {
						--color-orange: #FF5001;
						--color-green: #00CC90;
						--color-pink: #FF27E5;
						--color-grey: #EFEFEF;

						--lines: 3px solid black;
					}

					*,
					*::after,
					*::before {
						margin: 0;
						padding: 0;
						box-sizing: inherit; 
					}

					.container {
						height: 100%;
					}

					.container-scroll {
						display: flex;
						flex-wrap: nowrap;
						width: 500%;
					}

					.hero {
						min-width: 100vw;
						height: 100vh;
						display: flex;
						flex-direction: column;
					}

					.hero h2 {
						font-size: 10vw;
						font-weight: 300;
						line-height: 325px;
						height: 305px;
						clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
					}

					.hero__text h2 a {
						font-size: 10.5vw;
						color: black;
						text-decoration: none;
						display: block;
						transition: all .2s;
					}

					.hero__first, .hero__second {
						display: flex;
						height: 50%;
						/* border-bottom: var(--lines); */
						/* border-right: var(--lines); */
					}

					.hero__col {
						display: flex;
						align-items: center;
						justify-content: center;
						width: 50%;
						text-align: center;
					}

					.hero__col:first-child, .hero__second:first-child {
						/* border-right: var(--lines); */
					}

					.hero--event .hero__text {
						background-color: var(--color-orange);
					}

					.hero--studio .hero__text {
						background-color: var(--color-green);
					}

					.hero--next .hero__text {
						background-color: var(--color-pink);
					}

					.quote {
					overflow: hidden;
					}

					.split-line {
					overflow: hidden;
					}

				</style>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
				<script src="https://unpkg.com/gsap@3.12.5/dist/gsap.min.js"></script>
				<script src="https://unpkg.com/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
				<script src="https://assets.codepen.io/16327/SplitText3.min.js"></script>
				<script>
					gsap.registerPlugin(ScrollTrigger);

					let sections = gsap.utils.toArray(".item");

					let scrollTween = gsap.to(sections, {
						xPercent: -100 * (sections.length - 1),
						ease: "none", // <-- IMPORTANT!
						scrollTrigger: {
							trigger: ".container",
							pin: true,
							scrub: 1,
							end: "+=3000",
						}
					});

					const quotes = document.querySelectorAll(".quote");

					function setupSplits() {
					quotes.forEach(quote => {
						// Reset if needed
						if(quote.anim) {
						quote.anim.progress(1).kill();
						quote.split.revert();
						}

						quote.split = new SplitText(quote, { 
						type: "lines,words,chars",
						linesClass: "split-line"
						});

						// Set up the anim
						quote.anim = gsap.from(quote.split.chars, {
						scrollTrigger: {
							trigger: quote,
							toggleActions: "restart pause resume reverse",
							start: "top 50%",
						},
						duration: .1, 
						ease: "circ.out", 
						y: 80, 
						stagger: 0.05,
						});
					});
					}

					ScrollTrigger.addEventListener("refresh", setupSplits);
					setupSplits();
				</script>
				
	
