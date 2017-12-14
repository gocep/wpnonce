# WP-Nonce made with OOP

Replacing WordPress functional wp_nonce_* implementations with classes / objects.

## Setup / Usage / How to

Install this library where you want to use it:

    composer require "gocep/wpnonce"

### WP Nonce in OOP

The `wp_create_nonce` is represented by the `Nonce`:

	$context = new Nonce( 'some-action' );
	
	// get the current nonce
	echo (string) $context;

The `wp_nonce_url` is represented by the `NonceUrl`:

	$url = new NonceUrl( 'http://the.url', 'an-action', '_nonce_id' );
	$url->get_nonce_url(); // Now you receive an URL like "http://the.url?action=an-action&_nonce_id=smplnnce"
