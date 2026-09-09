<?php
/**
 * Partial: Credential Bar
 *
 * @param array $args {
 *     @type string $aria_label Optional. Default 'Credentials'.
 *     @type array  $items      Required. Each: { icon: string, label: string }.
 * }
 */
$items      = $args['items']      ?? [];
$aria_label = $args['aria_label'] ?? 'Credentials';
?>
<div class="de-credential-bar" role="region" aria-label="<?php echo esc_attr( $aria_label ); ?>">
	<div class="de-credential-bar__inner">
		<?php foreach ( $items as $item ) : ?>
			<span class="de-credential-bar__item">
				<span class="de-credential-bar__icon"><?php echo esc_html( $item['icon'] ); ?></span>
				<?php echo esc_html( $item['label'] ); ?>
			</span>
		<?php endforeach; ?>
	</div>
</div>
