<?php
/**
 * Partial: Stat Block
 *
 * @param array $args {
 *     @type string $value  Required.
 *     @type string $label  Required.
 *     @type string $prefix Optional. Default ''.
 *     @type string $suffix Optional. Default ''.
 *     @type string $size   Optional. 'sm' | 'md' | 'lg'. Default 'md'.
 * }
 */
$value  = $args['value']  ?? '';
$label  = $args['label']  ?? '';
$prefix = $args['prefix'] ?? '';
$suffix = $args['suffix'] ?? '';
$size   = $args['size']   ?? 'md';
$mod    = ( $size !== 'md' ) ? ' de-stat--' . esc_attr( $size ) : '';
?>
<div class="de-stat<?php echo $mod; ?>">
	<span class="de-stat__value"><?php echo esc_html( $prefix . $value . $suffix ); ?></span>
	<span class="de-stat__label"><?php echo esc_html( $label ); ?></span>
</div>
