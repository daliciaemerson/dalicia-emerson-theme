<?php
/**
 * Standardized Contact Section — sidebar layout (2fr copy + 1fr agent card + collapsible form).
 *
 * Usage:
 *   get_template_part( 'template-parts/contact-section', null, [
 *     'source'     => 'page-name',           // required
 *     'eyebrow'    => 'Relocation Consultations',
 *     'heading'    => 'Ready to Start…',
 *     'paragraphs' => [ 'First paragraph.', 'Second paragraph.' ],
 *   ]);
 */

$source     = $args['source']     ?? 'generic';
$eyebrow    = $args['eyebrow']    ?? '';
$heading    = $args['heading']    ?? '';
$paragraphs = $args['paragraphs'] ?? [];

$section_id  = 'de-contact-sidebar-' . sanitize_html_class( $source );
$btn_id      = 'de-disclosure-' . sanitize_html_class( $source );
$form_wrap_id = 'de-form-wrap-' . sanitize_html_class( $source );
?>

<section class="de-contact-sidebar" id="<?php echo esc_attr( $section_id ); ?>" aria-label="Contact Dalicia Emerson">
	<div class="de-contact-sidebar__inner">

		<!-- Left: copy -->
		<div class="de-contact-sidebar__copy">

			<?php if ( $eyebrow ) : ?>
				<p class="de-contact-sidebar__eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
			<?php endif; ?>

			<?php if ( $heading ) : ?>
				<h2 class="de-contact-sidebar__heading"><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>

			<?php foreach ( $paragraphs as $i => $p ) : ?>
				<p class="<?php echo $i === 0 ? 'de-contact-sidebar__lede' : 'de-contact-sidebar__body'; ?>">
					<?php echo esc_html( $p ); ?>
				</p>
			<?php endforeach; ?>

		</div>

		<!-- Right: sidebar -->
		<div class="de-contact-sidebar__sidebar">

			<?php get_template_part( 'template-parts/agent-contact-card', null, [ 'cta' => false ] ); ?>

			<div class="de-contact-sidebar__divider" aria-hidden="true">
				<span class="de-contact-sidebar__divider-rule"></span>
				<span class="de-contact-sidebar__divider-label">or</span>
				<span class="de-contact-sidebar__divider-rule"></span>
			</div>

			<button
				id="<?php echo esc_attr( $btn_id ); ?>"
				class="de-contact-sidebar__disclosure"
				type="button"
				aria-expanded="false"
				aria-controls="<?php echo esc_attr( $form_wrap_id ); ?>"
			>
				<span>Have Dalicia Contact Me</span>
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="de-contact-sidebar__chevron">
					<polyline points="6 9 12 15 18 9"/>
				</svg>
			</button>

			<div
				id="<?php echo esc_attr( $form_wrap_id ); ?>"
				class="de-contact-sidebar__form-wrap"
			>
				<div class="de-contact-sidebar__form-inner">
					<div class="de-lead-form-panel">
						<h3 class="de-lead-form-panel__heading">Leave your information</h3>
						<p class="de-lead-form-panel__intro">Fill this out and I'll reach out shortly.</p>
						<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => $source ] ); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
	var btn  = document.getElementById(<?php echo wp_json_encode( $btn_id ); ?>);
	var wrap = document.getElementById(<?php echo wp_json_encode( $form_wrap_id ); ?>);
	if (!btn || !wrap) return;
	btn.addEventListener('click', function () {
		var open = btn.getAttribute('aria-expanded') === 'true';
		btn.setAttribute('aria-expanded', open ? 'false' : 'true');
		wrap.classList.toggle('is-open', !open);
	});
});
</script>
