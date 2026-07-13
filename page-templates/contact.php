<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * Full lead capture page with multiple contact methods.
 * Form submissions handled by de_handle_lead_submission() in functions.php
 * (or replace with Gravity Forms / Fluent Forms shortcode in production).
 */

get_header();
?>

<main id="main" class="de-contact-page" role="main">

	<!-- ── Hero ──────────────────────────────────────────────────────────── -->
	<section class="de-page-hero de-page-hero--compact" aria-labelledby="contact-hero-heading">
		<div class="de-container">
			<h1 id="contact-hero-heading">Let&rsquo;s Talk</h1>
			<p class="de-page-hero__subtitle">
				Whether you&rsquo;re buying, selling, or just exploring &mdash; reach out.
				I respond to every message personally.
			</p>
		</div>
	</section>

	<div class="de-container de-contact-page__layout">

		<!-- ── Contact Form Column ───────────────────────────────────────── -->
		<section class="de-contact-page__form-col" aria-labelledby="contact-form-heading">
			<h2 id="contact-form-heading">Send Me a Message</h2>

			<!-- Production note: replace this form with a Gravity Forms or
			     Fluent Forms shortcode for full CRM sync, spam protection,
			     and conditional logic. The AJAX handler in functions.php
			     is a lightweight backup only. -->

			<form
				id="de-contact-form"
				class="de-form"
				method="post"
				action="#"
				aria-label="Contact Dalicia Emerson"
				novalidate
			>
				<input type="hidden" name="action" value="de_submit_lead">
				<input type="hidden" name="nonce"  value="<?php echo esc_attr( wp_create_nonce( 'de_lead_nonce' ) ); ?>">
				<input type="hidden" name="source" value="contact-page">

				<div class="de-form__row">
					<div class="de-form__group">
						<label for="contact-name" class="de-form__label">
							Full Name <span class="de-form__required" aria-hidden="true">*</span>
						</label>
						<input
							type="text"
							id="contact-name"
							name="name"
							class="de-form__input"
							autocomplete="name"
							required
							aria-required="true"
						>
					</div>
					<div class="de-form__group">
						<label for="contact-phone" class="de-form__label">Phone Number</label>
						<input
							type="tel"
							id="contact-phone"
							name="phone"
							class="de-form__input"
							autocomplete="tel"
						>
					</div>
				</div>

				<div class="de-form__group">
					<label for="contact-email" class="de-form__label">
						Email Address <span class="de-form__required" aria-hidden="true">*</span>
					</label>
					<input
						type="email"
						id="contact-email"
						name="email"
						class="de-form__input"
						autocomplete="email"
						required
						aria-required="true"
					>
				</div>

				<div class="de-form__group">
					<label for="contact-interest" class="de-form__label">I&rsquo;m interested in&hellip;</label>
					<select id="contact-interest" name="interest" class="de-form__select">
						<option value="">Select one</option>
						<option value="buying">Buying a home in NWA</option>
						<option value="selling">Selling my NWA home</option>
						<option value="relocation">Corporate / Walmart relocation</option>
						<option value="luxury">Luxury property ($500K+)</option>
						<option value="valuation">Home valuation</option>
						<option value="general">General question</option>
					</select>
				</div>

				<div class="de-form__group">
					<label for="contact-timeline" class="de-form__label">My timeline is&hellip;</label>
					<select id="contact-timeline" name="timeline" class="de-form__select">
						<option value="">Select one</option>
						<option value="asap">As soon as possible</option>
						<option value="1-3months">1&ndash;3 months</option>
						<option value="3-6months">3&ndash;6 months</option>
						<option value="6plus">6+ months / just exploring</option>
					</select>
				</div>

				<div class="de-form__group">
					<label for="contact-message" class="de-form__label">Message</label>
					<textarea
						id="contact-message"
						name="message"
						class="de-form__textarea"
						rows="5"
						placeholder="Tell me a bit about what you&rsquo;re looking for&hellip;"
					></textarea>
				</div>

				<!-- Honeypot — hidden from real users, catches bots -->
				<div class="de-form__group de-form__group--honeypot" aria-hidden="true" style="display:none !important;">
					<label for="contact-website">Website</label>
					<input type="text" id="contact-website" name="website" tabindex="-1" autocomplete="off">
				</div>

				<div class="de-form__group">
					<button type="submit" class="de-btn de-btn--primary de-btn--large de-btn--full">
						Send Message
					</button>
				</div>

				<p class="de-form__disclaimer">
					Your information is never sold or shared. I&rsquo;ll respond within one business day.
				</p>

				<!-- JS-injected status messages land here -->
				<div id="de-contact-status" class="de-form__status" role="alert" aria-live="polite"></div>

			</form>

		</section>

		<!-- ── Contact Info Column ───────────────────────────────────────── -->
		<aside class="de-contact-page__info-col" role="complementary" aria-label="Contact information">

			<div class="de-agent-bio-card">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dalicia-headshot.jpg' ) ); ?>"
				     alt="Dalicia Emerson, REALTOR® — Northwest Arkansas"
				     class="de-agent-bio-card__photo"
				     width="300" height="375" loading="eager">

				<div class="de-agent-bio-card__body">
					<h2 class="de-agent-bio-card__name"><?php echo esc_html( DE_AGENT_NAME ); ?></h2>
					<p class="de-agent-bio-card__title">REALTOR® &bull; Coldwell Banker Global Luxury®</p>
					<ul class="de-agent-bio-card__contact">
						<li>
							<a href="tel:<?php echo esc_attr( DE_PHONE ); ?>" class="de-btn de-btn--primary de-btn--full">
								<?php echo esc_html( DE_PHONE_DISPLAY ); ?>
							</a>
						</li>
						<li>
							<a href="mailto:<?php echo esc_attr( DE_EMAIL ); ?>" class="de-agent-bio-card__contact-link">
								<span class="screen-reader-text">Email: </span>
								<?php echo esc_html( DE_EMAIL ); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- What to expect -->
			<div class="de-contact-expectations">
				<h3>What to Expect</h3>
				<ul>
					<li><strong>Response time:</strong> Within one business day (usually same day)</li>
					<li><strong>No pressure:</strong> I give you honest information, not a sales pitch</li>
					<li><strong>Free consultations:</strong> Phone, video call, or coffee in Bentonville</li>
					<li><strong>Relocation-friendly:</strong> I work with remote clients across time zones</li>
				</ul>
			</div>

			<!-- Service area -->
			<div class="de-service-area">
				<h3>Service Area</h3>
				<p>Bentonville, Rogers, Fayetteville, Springdale, Bella Vista, Lowell,
				   Siloam Springs, and Eureka Springs.</p>
			</div>

		</aside>

	</div>

</main>

<script>
// Lightweight contact form handler — replace with GF/FF script in production
(function () {
	var form = document.getElementById('de-contact-form');
	if (!form) return;
	form.addEventListener('submit', function (e) {
		e.preventDefault();
		if (form.querySelector('[name="website"]').value) return; // honeypot
		var data = new FormData(form);
		var status = document.getElementById('de-contact-status');
		var btn = form.querySelector('[type="submit"]');
		btn.disabled = true;
		btn.textContent = 'Sending…';
		fetch(DE.ajaxUrl, { method: 'POST', body: data })
			.then(function (r) { return r.json(); })
			.then(function (json) {
				status.className = 'de-form__status ' + (json.success ? 'de-form__status--success' : 'de-form__status--error');
				status.textContent = json.data.message;
				if (json.success) form.reset();
			})
			.catch(function () {
				status.className = 'de-form__status de-form__status--error';
				status.textContent = 'Something went wrong. Please call or email directly.';
			})
			.finally(function () {
				btn.disabled = false;
				btn.textContent = 'Send Message';
			});
	});
}());
</script>

<?php get_footer(); ?>
