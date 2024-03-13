<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package schoolsite
 */

?>

<footer id="colophon" class="site-footer">

	<div class="footer-icon">
		<a href="<?php echo esc_url(home_url('/')); ?>">
			<svg width="150" height="150" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" fill="white">
				<path d="M15.517 24h-11.646c.522-3.035.897-6.162-.422-8.028-1.666-2.357-2.43-4.742-2.449-6.883-.045-5.19 4.231-9.114 10.203-9.089 7.236.03 9.328 6.156 9.773 7.943.34 1.369-.898 1.869-.166 2.702.596.679 1.035 1.364 1.789 2.177.292.315.405.646.401.943-.006.434-.291.798-.748.958-.429.15-.76.32-1.215.443-.145 1.16-.521 2.572-.798 3.557-.737 2.62-2.896 1.059-3.881 2.607-.426.668-.64 1.738-.841 2.67zm-4.293-8.316c.117-.001.23-.04.307-.109l.594-.391h-2.25l.594.391c.077.069.19.109.308.109h.447zm.922-1c.138-.001.25-.112.25-.25s-.112-.25-.25-.25h-2.279c-.138 0-.25.112-.25.25s.112.25.25.25h2.279zm.247-1c0-2.003 1.607-2.83 1.607-4.614 0-1.86-1.501-2.886-3.001-2.886s-2.999 1.024-2.999 2.886c0 1.784 1.607 2.639 1.607 4.614h2.786zm2.477-3.615l1.349.612-.413.911-1.299-.588c.151-.3.276-.608.363-.935zm-7.739 0c.087.332.208.631.36.935l-1.296.588-.414-.911 1.35-.612zm9.369-.885v-1h-1.594c.073.327.103.665.093 1h1.501zm-9.498 0v-.003c-.01-.334.02-.67.092-.997h-1.594v1h1.502zm7.02-2.714l1.242-.882.579.816-1.252.888c-.146-.291-.336-.566-.569-.822zm-6.044-.001c-.23.252-.418.525-.569.823l-1.251-.888.578-.816 1.242.881zm4.435-1.046l.663-1.345.897.443-.664 1.345c-.278-.184-.58-.332-.896-.443zm-2.826-.001c-.315.11-.618.258-.897.442l-.663-1.343.897-.443.663 1.344zm1.913-.208c-.334-.039-.654-.041-1-.001v-1.529h1v1.53z" />
			</svg>
		</a>
	</div>

	<div class="site-info">
		<h2>Credits</h2>
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'school-site-theme')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'school-site-theme'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'school-site-theme'), 'school-site-theme', '<a href="https://williamwu.tech/school-demo">William Wu, Allan Chow</a>');
		?>
	</div><!-- .site-info -->

	<div>
		<p>Photos courtesy of <a href="https://www.shopify.com/stock-photos">Burst</a>.</p>
	</div>

	<nav class="footer-links">
		<h2><?php esc_html_e('Links', 'school-site-theme'); ?></h2>
		<ul>
			<li>
				<?php
				$course_schedule_page = get_page_by_path('course-schedule');
				if ($course_schedule_page) {
					$course_schedule_link = get_permalink($course_schedule_page->ID);
					echo '<a href="' . esc_url($course_schedule_link) . '">' . esc_html__('Schedule', 'school-site-theme') . '</a>';
				}
				?>
			</li>
			<li>
				<?php
				if (get_page_by_path('news')) {
					echo '<a href="' . esc_url(get_permalink(get_page_by_path('news'))) . '">' . esc_html__('News', 'school-site-theme') . '</a>';
				}
				?>
			</li>
		</ul>
	</nav>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>