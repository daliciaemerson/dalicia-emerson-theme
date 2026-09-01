<?php
/**
 * Standardized Contact Section — agent card + lead form combo.
 *
 * Usage:
 *   get_template_part( 'template-parts/contact-section', null, [ 'source' => 'page-name' ] );
 */

$source = $args['source'] ?? 'generic';
?>

<section class="de-contact-section" aria-label="Contact Dalicia Emerson">
	<div class="de-container de-contact-section__inner">

		<div class="de-contact-section__card">
			<?php get_template_part( 'template-parts/agent-contact-card' ); ?>
		</div>

		<div class="de-contact-section__form">
			<?php get_template_part( 'template-parts/lead-form', null, [ 'source' => $source ] ); ?>
		</div>

	</div>
</section>
