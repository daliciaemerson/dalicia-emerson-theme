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

// Count instances per source so a page can include the same form twice with unique IDs
$GLOBALS['de_lead_form_count'][ $source ] = ( $GLOBALS['de_lead_form_count'][ $source ] ?? 0 ) + 1;
$instance   = $GLOBALS['de_lead_form_count'][ $source ];
$id_suffix  = sanitize_html_class( $source ) . ( $instance > 1 ? '-' . $instance : '' );

$form_id    = 'de-lead-form-' . $id_suffix;
$status_id  = 'de-status-' . $id_suffix;
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
			aria-describedby="<?php echo esc_attr( $form_id ); ?>-name-error"
		>
		<span id="<?php echo esc_attr( $form_id ); ?>-name-error" class="de-form__field-error" role="alert" aria-live="polite"></span>
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
			inputmode="email"
			autocomplete="email"
			required
			aria-required="true"
			aria-describedby="<?php echo esc_attr( $form_id ); ?>-email-error"
		>
		<span id="<?php echo esc_attr( $form_id ); ?>-email-error" class="de-form__field-error" role="alert" aria-live="polite"></span>
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
			inputmode="tel"
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

	<p class="de-form__privacy">
		We use your details only to respond to your inquiry.
		See our <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Privacy Policy</a>.
	</p>

	<div id="<?php echo esc_attr( $status_id ); ?>"
	     class="de-form__status"
	     role="alert"
	     aria-live="polite"></div>

</form>
