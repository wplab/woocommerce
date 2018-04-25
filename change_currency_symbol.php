add_filter( 'woocommerce_currency_symbol', 'change_currency_symbol', 10, 2 );

function change_currency_symbol( $symbols, $currency ) {
	if ( 'USD' === $currency ) {
		return 'USD';
	}

	if ( 'EUR' === $currency ) {
		return 'Euro';
	}

	if ( 'AED' === $currency ) {
		return 'AED';
	}

        return $symbols;
}
