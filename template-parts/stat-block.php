<?php
/**
 * Partial: Stat Block
 *
 * @param array $args {
 *     @type string $value  Required.
 *     @type string $label  Required.
 *     @type string $prefix Optional. Default ''.
 *     @type string $suffix Optional. Default ''.
 *     @type string $size   Optional. 'sm'|'md'|'lg'. Default 'md'.
 *     @type string $tone   Optional. 'dark'|'light'. Default 'dark'.
 *     @type bool   $boxed  Optional. Card surface with gold top border. Default false.
 * }
 */
$value  = $args['value']  ?? '';
$label  = $args['label']  ?? '';
$prefix = $args['prefix'] ?? '';
$suffix = $args['suffix'] ?? '';
$size   = $args['size']   ?? 'md';
$tone   = $args['tone']   ?? 'dark';
$boxed  = $args['boxed']  ?? false;

$classes = [ 'de-stat' ];
if ( $size !== 'md' )    $classes[] = 'de-stat--' . esc_attr( $size );
if ( $tone === 'light' ) $classes[] = 'de-stat--light';
if ( $boxed )            $classes[] = 'de-stat--boxed';
?>
<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<span class="de-stat__value"><?php echo esc_html( $prefix . $value . $suffix ); ?></span>
	<span class="de-stat__label"><?php echo esc_html( $label ); ?></span>
</div>
