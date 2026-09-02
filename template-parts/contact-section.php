<?php
/**
 * Standardized Contact Section — agent panel + OR divider + lead form.
 *
 * Usage:
 *   get_template_part( 'template-parts/contact-section', null, [
 *     'source'  => 'page-name',           // required — tags form submissions
 *     'eyebrow' => 'Let\'s Talk',         // optional
 *     'heading' => 'Reach out directly…', // optional
 *     'intro'   => 'Call or email…',      // optional
 *   ]);
 */

$source     = $args['source']     ?? 'generic';
$eyebrow    = $args['eyebrow']    ?? '';
$heading    = $args['heading']    ?? '';
$paragraphs = $args['paragraphs'] ?? [];

$headshot = get_theme_file_uri( '/assets/images/headshot/dalicia-headshot.jpg' );
$monogram = get_theme_file_uri( '/assets/images/de-monogram.png' );
$ig       = get_theme_file_uri( '/assets/images/social-media-icons/icons8-instagram-48.png' );
$fb       = get_theme_file_uri( '/assets/images/social-media-icons/icons8-facebook-48.png' );
$li       = get_theme_file_uri( '/assets/images/social-media-icons/icons8-linkedin-48.png' );
?>

<section class="de-contact-section" aria-label="Contact Dalicia Emerson">
	<div class="de-contact-section__inner">

		<?php if ( $eyebrow || $heading || $paragraphs ) : ?>
		<div class="de-contact-section__header">
			<?php if ( $eyebrow ) : ?>
				<p class="de-contact-section__eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
			<?php endif; ?>
			<?php if ( $heading ) : ?>
				<h2 class="de-contact-section__heading"><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>
			<?php foreach ( $paragraphs as $p ) : ?>
				<p class="de-contact-section__intro"><?php echo esc_html( $p ); ?></p>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>

		<!-- Agent contact panel — horizontal -->
		<div class="de-agent-panel">
			<div class="de-agent-panel__photo">
				<img src="<?php echo esc_url( $headshot ); ?>"
				     alt="Dalicia Emerson, REALTOR® — Northwest Arkansas"
				     class="de-agent-panel__photo-img">
			</div>
			<div class="de-agent-panel__body">
				<div class="de-agent-panel__identity">
					<img src="<?php echo esc_url( $monogram ); ?>" alt="" width="52" height="52" class="de-agent-panel__monogram">
					<div>
						<h2 class="de-agent-panel__name">Dalicia Emerson</h2>
						<p class="de-agent-panel__title">Luxury Real Estate</p>
					</div>
				</div>
				<div class="de-agent-panel__rows">
					<a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-agent-panel__row">
						<span class="de-agent-panel__row-icon" aria-hidden="true">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.07 2.18 2 2 0 012.03 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
						</span>
						<?php echo esc_html( DE_PHONE_DISPLAY ); ?>
					</a>
					<a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>" class="de-agent-panel__row">
						<span class="de-agent-panel__row-icon" aria-hidden="true">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						</span>
						<?php echo esc_html( DE_EMAIL ); ?>
					</a>
					<div class="de-agent-panel__row de-agent-panel__row--muted">
						<span class="de-agent-panel__row-icon" aria-hidden="true">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
						</span>
						<span>Coldwell Banker Harris McHaney &amp; Faucette</span>
					</div>
				</div>
				<div class="de-agent-panel__social">
					<a href="https://www.instagram.com/dalicia_emersonnwarealtor/" target="_blank" rel="noopener" class="de-agent-panel__social-btn" aria-label="Instagram">
						<img src="<?php echo esc_url( $ig ); ?>" alt="" width="20" height="20">
					</a>
					<a href="https://www.facebook.com/watch/?v=2108780623329518" target="_blank" rel="noopener" class="de-agent-panel__social-btn" aria-label="Facebook">
						<img src="<?php echo esc_url( $fb ); ?>" alt="" width="20" height="20">
					</a>
					<a href="https://www.linkedin.com/in/dalicia-emerson-482ab2a3/" target="_blank" rel="noopener" class="de-agent-panel__social-btn" aria-label="LinkedIn">
						<img src="<?php echo esc_url( $li ); ?>" alt="" width="20" height="20">
					</a>
				</div>
			</div>
		</div>

		<!-- OR divider -->
		<div class="de-contact-section__divider" aria-hidden="true">
			<span class="de-contact-section__divider-rule"></span>
			<span class="de-contact-section__divider-label">or</span>
			<span class="de-contact-section__divider-rule"></span>
		</div>

		<!-- Lead form panel -->
		<div class="de-lead-form-panel">
			<h3 class="de-lead-form-panel__heading">Leave your information</h3>
			<p class="de-lead-form-panel__intro">Fill this out and I'll reach out shortly — usually the same day.</p>
			<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => $source ] ); ?>
		</div>

	</div>
</section>
