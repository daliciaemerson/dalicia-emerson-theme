<?php
/**
 * Partial: Stats Bar
 *
 * @param array $args {
 *     @type string $aria_label Optional. Default 'Statistics'.
 *     @type array  $items      Required. Each: { value, label, prefix?, suffix?, size? }.
 * }
 */
$items      = $args['items']      ?? [];
$aria_label = $args['aria_label'] ?? 'Statistics';
?>
<div class="de-stats-bar" role="region" aria-label="<?php echo esc_attr( $aria_label ); ?>">
	<div class="de-container de-stats-bar__inner">
		<?php foreach ( $items as $item ) :
			get_template_part( 'template-parts/stat-block', null, $item );
		endforeach; ?>
	</div>
</div>
