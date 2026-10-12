/* Dalicia Emerson — main.js */

/* ── Lead forms ───────────────────────────────────────────────────────────
   One handler for every form.de-lead-form (template-parts/lead-form.php and
   the Contact page). Posts to de_submit_lead; on success redirects to the
   Thank You page, on failure shows a message with the phone number.
   A cached page can carry an expired nonce (403 / "-1"): fetch a fresh one
   from de_fresh_nonce and retry once. */
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

	// Resolves { nonceFailed: true } or the parsed JSON response
	function post( form ) {
		return fetch( DE.ajaxUrl, { method: 'POST', body: new FormData( form ), credentials: 'same-origin' } )
			.then( function (r) {
				return r.text().then( function (text) {
					if ( r.status === 403 || text.trim() === '-1' ) return { nonceFailed: true };
					return JSON.parse( text );
				} );
			} );
	}

	function refreshNonce( form ) {
		var body = new FormData();
		body.append( 'action', 'de_fresh_nonce' );
		return fetch( DE.ajaxUrl, { method: 'POST', body: body, credentials: 'same-origin', cache: 'no-store' } )
			.then( function (r) { return r.json(); } )
			.then( function (json) {
				if ( ! json || ! json.success || ! json.data || ! json.data.nonce ) throw new Error( 'nonce' );
				form.querySelector( '[name="nonce"]' ).value = json.data.nonce;
			} );
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

		post( form )
			.then( function (json) {
				if ( ! json.nonceFailed ) return json;
				return refreshNonce( form ).then( function () { return post( form ); } );
			} )
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
