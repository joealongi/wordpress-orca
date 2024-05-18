<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress Orca
 */

?>

	<footer>

			<div class="flex-column">
			
				<div class="flex-column-item site-social"> 
					<ul class="flex-row">
						<li class="flex-row-item">
							<a class="" href="https://github.com/" target="_blank" rel="noreferrer noopener" aria-label="GitHub Social Link" type="link">
								<img src="/wp-content/themes/wordpress-orca/images/svg/GitHubLogo.svg" loading="lazy" alt="GitHub Logo" height="30" width="30">
							</a>
						</li>
						<li class="flex-row-item">
							<a class="" href="https://www.linkedin.com/" target="_blank" rel="noreferrer noopener" aria-label="LinkedIn Social Link" type="link">
								<img src="/wp-content/themes/wordpress-orca/images/svg/LinkedInLogo.svg" loading="lazy" alt="LinkedIn Logo" height="30" width="30">
							</a>
						</li>
						<li class="flex-row-item">
							<a class="" href="https://x.com/" target="_blank" rel="noreferrer noopener" aria-label="X Social Link" type="link">
								<img src="/wp-content/themes/wordpress-orca/images/svg/XLogo.svg" loading="lazy" alt="X Logo" height="30" width="30">
							</a>
						</li>
						<li class="flex-row-item">
							<a class="" href="https://www.instagram.com/" target="_blank" rel="noreferrer noopener" aria-label="Instagram Social Link" type="link">
								<img src="/wp-content/themes/wordpress-orca/images/svg/InstagramLogo.svg" loading="lazy" alt="Instagram Logo" height="30" width="30">
							</a>
						</li>
					</ul>
				</div><!-- .site-social -->

				<div class="flex-column-item site-contact">
					<ul class="flex-row">
						<li class="flex-row-item"> 
							<a class="" href="tel:11234567899" target="_blank" rel="noreferrer noopener" aria-label="Phone Contact Link" type="link">
								+1 (123) 456-7899
							</a>
						</li>
						<li class="flex-row-item">
							<a class="" href="mailto:email@email.com" target="_blank" rel="noreferrer noopener" aria-label="Email Contact Link" type="link">
								email@email.com
							</a>
						</li>
						<li class="flex-row-item">
							<a class="" href="https://www.google.com/" target="_blank" rel="noreferrer noopener" aria-label="Google Maps Contact Link" type="link">
								City, ST
							</a>
						</li>
						<li class="flex-row-item">
							<a class="" href="/privacy-policy" target="_blank" rel="noreferrer noopener" aria-label="Privacy Policy Contact Link" type="link">
								Privacy Policy
							</a>
						</li>
					</ul>
				</div><!-- .site-contact -->

				<div class="flex-column-item site-copyright">
					<p>&#x24B8; <span id="site-copyright-year"></span> WordPress Orca</p>
				</div><!-- .site-copyright -->

			</div>

	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
	currentYear();
</script>

</body>

</html>
