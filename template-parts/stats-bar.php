<?php
/**
 * Partial: Stats Bar
 *
 * @param array $args {
 *     @type string $aria_label Optional. Default 'Statistics'.
 *     @type array  $items      Required. Each: { value: string, label: string, prefix?: string, suffix?: string }.
 * }
 */
$items      = $args['items']      ?? [];
$aria_label = $args['aria_label'] ?? 'Statistics';
?>
<div class="de-stats-bar" role="region" aria-label="<?php echo esc_attr( $aria_label ); ?>">
	<div class="de-container de-stats-bar__inner">
		<?php foreach ( $items as $item ) : ?>
			<div class="de-stat">
				<span class="de-stat__value"><?php echo esc_html( ( $item['prefix'] ?? '' ) . $item['value'] . ( $item['suffix'] ?? '' ) ); ?></span>
				<span class="de-stat__label"><?php echo esc_html( $item['label'] ); ?></span>
			</div>
		<?php endforeach; ?>
	</div>
</div>
