<?php
/**
 * Reusable lead capture form partial.
 *
 * Usage:
 *   get_template_part( 'template-parts/lead-form', null, [ 'source' => 'relocation-hub' ] );
 *
 * Replace with a Gravity Forms or Fluent Forms shortcode in production
 * for spam protection, CRM sync, and conditional logic.
 */

$source     = $args['source'] ?? 'generic';
$form_id    = 'de-lead-form-' . sanitize_html_class( $source );
$status_id  = 'de-status-' . sanitize_html_class( $source );
$nonce_val  = wp_create_nonce( 'de_lead_nonce' );
?>

<form
	id="<?php echo esc_attr( $form_id ); ?>"
	class="de-form de-lead-form"
	method="post"
	action="#"
	novalidate
	aria-label="Contact Dalicia Emerson"
>
	<input type="hidden" name="action"  value="de_submit_lead">
	<input type="hidden" name="nonce"   value="<?php echo esc_attr( $nonce_val ); ?>">
	<input type="hidden" name="source"  value="<?php echo esc_attr( $source ); ?>">

	<div class="de-form__group">
		<label for="<?php echo esc_attr( $form_id ); ?>-name" class="de-form__label">
			Name <span class="de-form__required" aria-hidden="true">*</span>
		</label>
		<input
			type="text"
			id="<?php echo esc_attr( $form_id ); ?>-name"
			name="name"
			class="de-form__input"
			autocomplete="name"
			required
			aria-required="true"
		>
	</div>

	<div class="de-form__group">
		<label for="<?php echo esc_attr( $form_id ); ?>-email" class="de-form__label">
			Email <span class="de-form__required" aria-hidden="true">*</span>
		</label>
		<input
			type="email"
			id="<?php echo esc_attr( $form_id ); ?>-email"
			name="email"
			class="de-form__input"
			autocomplete="email"
			required
			aria-required="true"
		>
	</div>

	<div class="de-form__group">
		<label for="<?php echo esc_attr( $form_id ); ?>-phone" class="de-form__label">
			Phone
		</label>
		<input
			type="tel"
			id="<?php echo esc_attr( $form_id ); ?>-phone"
			name="phone"
			class="de-form__input"
			autocomplete="tel"
		>
	</div>

	<div class="de-form__group">
		<label for="<?php echo esc_attr( $form_id ); ?>-message" class="de-form__label">
			Message
		</label>
		<textarea
			id="<?php echo esc_attr( $form_id ); ?>-message"
			name="message"
			class="de-form__textarea"
			rows="4"
		></textarea>
	</div>

	<!-- Honeypot — hidden from humans, visible to bots -->
	<div style="display:none !important;" aria-hidden="true">
		<label for="<?php echo esc_attr( $form_id ); ?>-website">Website</label>
		<input type="text" id="<?php echo esc_attr( $form_id ); ?>-website" name="website" tabindex="-1" autocomplete="off">
	</div>

	<button type="submit" class="de-btn de-btn--primary de-btn--full">
		Send Message
	</button>

	<div id="<?php echo esc_attr( $status_id ); ?>"
	     class="de-form__status"
	     role="alert"
	     aria-live="polite"
	     style="display:none;">
	</div>

</form>

<script>
(function () {
	var form   = document.getElementById( <?php echo wp_json_encode( $form_id ); ?> );
	var status = document.getElementById( <?php echo wp_json_encode( $status_id ); ?> );
	if ( ! form || ! status || typeof DE === 'undefined' ) return;

	form.addEventListener( 'submit', function (e) {
		e.preventDefault();
		if ( form.querySelector( '[name="website"]' ).value ) return; // honeypot

		var btn = form.querySelector( '[type="submit"]' );
		btn.disabled = true;
		btn.textContent = 'Sending…';
		status.style.display = 'none';

		fetch( DE.ajaxUrl, { method: 'POST', body: new FormData( form ) } )
			.then( function (r) { return r.json(); } )
			.then( function (json) {
				if ( json.success && json.data && json.data.redirect ) {
					window.location.href = json.data.redirect;
					return;
				}
				status.className  = 'de-form__status ' + ( json.success ? 'de-form__status--success' : 'de-form__status--error' );
				status.textContent = json.data.message;
				status.style.display = 'block';
				if ( json.success ) form.reset();
			} )
			.catch( function () {
				status.className   = 'de-form__status de-form__status--error';
				status.textContent = 'Something went wrong. Please call or email directly.';
				status.style.display = 'block';
			} )
			.finally( function () {
				btn.disabled = false;
				btn.textContent = 'Send Message';
			} );
	} );
}());
</script>
