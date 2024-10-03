<?php
/**
 * Title: Front Page Content
 * Slug: wporg-make-2024/front-page-content
 * Inserter: no
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"774px"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)">

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Whether you’re a budding developer, a designer, or just like helping out, we’re always looking for people to help make WordPress even better.', 'make-wporg' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Teams', 'make-wporg' ); ?></h2>
		<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'If you want to get involved in WordPress, this is the place to start. We’ve got blogs for each contributor group, general news, and upcoming events.', 'make-wporg' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:wporg/notice {"type":"info"} -->
	<div class="wp-block-wporg-notice is-info-notice">
		<div class="wp-block-wporg-notice__icon"></div>
		<div class="wp-block-wporg-notice__content">
			<p>
			<?php echo wp_kses_post(
				sprintf(
					/* translators: 1: Contributor wizard link */
					__( 'Not sure which contributor teams match your interests and abilities? Check out our <a href="%s">contributor wizard</a>.', 'make-wporg' ),
					'https://make.wordpress.org/contribute/',
				)
			); ?>
			</p>
		</div>
	</div>
	<!-- /wp:wporg/notice -->

</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":100,"postType":"make_site","order":"asc","orderBy":"date"},"align":"wide","className":"wporg-make-team-grid"} -->
<div class="wp-block-query alignwide wporg-make-team-grid">

	<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":3}} -->

		<!-- wp:template-part {"slug":"card-team","className":"has-display-contents"} /-->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->

		<!-- wp:pattern {"slug":"wporg-make-2024/query-no-sites"} /-->

	<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->
