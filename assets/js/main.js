/* Dalicia Emerson — main.js */

/* ── Lead forms ───────────────────────────────────────────────────────────
   One handler for every form.de-lead-form (template-parts/lead-form.php and
   the Contact page). Posts to de_submit_lead; on success redirects to the
   Thank You page, on failure shows a message with the phone number. */
(function () {
	if ( typeof DE === 'undefined' ) return;

	var LABEL = 'Send Message';

	function showError( form, message ) {
		var status = form.querySelector( '.de-form__status' );
		if ( ! status ) return;
		status.className   = 'de-form__status de-form__status--error';
		status.textContent = ( message || 'Something went wrong sending your message.' ) +
			' You can also call or text me at ' + DE.phone + '.';
	}

	document.addEventListener( 'submit', function (e) {
		var form = e.target;
		if ( ! form.classList || ! form.classList.contains( 'de-lead-form' ) ) return;
		e.preventDefault();

		var honeypot = form.querySelector( '[name="website"]' );
		if ( honeypot && honeypot.value ) return;

		var btn    = form.querySelector( '[type="submit"]' );
		var status = form.querySelector( '.de-form__status' );
		if ( btn.disabled ) return;

		btn.disabled    = true;
		btn.textContent = 'Sending…';
		if ( status ) {
			status.className   = 'de-form__status';
			status.textContent = '';
		}

		fetch( DE.ajaxUrl, { method: 'POST', body: new FormData( form ) } )
			.then( function (r) { return r.json(); } )
			.then( function (json) {
				if ( json && json.success ) {
					window.location.href = DE.thankYouUrl;
					return;
				}
				showError( form, json && json.data && json.data.message );
				btn.disabled    = false;
				btn.textContent = LABEL;
			} )
			.catch( function () {
				showError( form );
				btn.disabled    = false;
				btn.textContent = LABEL;
			} );
	} );
}());
