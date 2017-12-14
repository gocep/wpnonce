# WP-Nonce made with OOP

Replacing WordPress functional wp_nonce_* implementations with classes / objects.

## Setup / Usage / How to

Install this library where you want to use it:

    composer require "gocep/wpnonce"

	or via editing composer.json file and then use composer update

{
    "require": {
        "gocep/wpnonce" : "1.0.0"
    }
}

### WP Nonce in OOP

The `wp_create_nonce` is represented by the `Nonce`:

	$context = new \WP_Nonce\Nonce( 'some-action' );
	
	// get the current nonce
	echo (string) $context;

The `wp_nonce_url` is represented by the `NonceUrl`:

	$url = new \WP_Nonce\NonceUrl( 'http://the.url', 'an-action', '_nonce_id' );
	$url->get_nonce_url(); // Now you receive an URL like "http://the.url?action=an-action&_nonce_id=smplnnce"