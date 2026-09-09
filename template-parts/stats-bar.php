<?php
/**
 * Partial: Stats Bar
 *
 * @param array $args {
 *     @type string $aria_label Optional. Default 'Statistics'.
 *     @type array  $items      Required. Each: { value, label, prefix?, suffix?, size?, tone?, boxed? }.
 *     @type bool   $contained  Optional. Prose-width, no band bg. Default false.
 *     @type string $tone       Optional. 'dark'|'light'. Default 'dark'.
 *     @type bool   $boxed      Optional. Card surface per item. Default false.
 *     @type bool   $dividers   Optional. Hairlines between items. Auto-off when boxed. Default true.
 *     @type bool   $gold_rule  Optional. Gold-warm bottom border (about page context). Default false.
 * }
 */
$items      = $args['items']      ?? [];
$aria_label = $args['aria_label'] ?? 'Statistics';
$contained  = $args['contained']  ?? false;
$tone       = $args['tone']       ?? 'dark';
$boxed      = $args['boxed']      ?? false;
$dividers   = $args['dividers']   ?? true;
$gold_rule  = $args['goldRule']   ?? false;

$show_dividers = $dividers && ! $boxed;

$bar_classes = [ 'de-stats-bar' ];
if ( $contained )        $bar_classes[] = 'de-stats-bar--contained';
if ( ! $show_dividers )  $bar_classes[] = 'de-stats-bar--no-dividers';
if ( $gold_rule )        $bar_classes[] = 'de-stats-bar--gold-rule';

$inner_classes = [ 'de-stats-bar__inner' ];
if ( ! $contained )      $inner_classes[] = 'de-container';
?>
<div class="<?php echo esc_attr( implode( ' ', $bar_classes ) ); ?>" role="region" aria-label="<?php echo esc_attr( $aria_label ); ?>">
	<div class="<?php echo esc_attr( implode( ' ', $inner_classes ) ); ?>">
		<?php foreach ( $items as $item ) :
			get_template_part( 'template-parts/stat-block', null, array_merge( $item, [
				'tone'  => $item['tone']  ?? $tone,
				'boxed' => $item['boxed'] ?? $boxed,
			] ) );
		endforeach; ?>
	</div>
</div>
