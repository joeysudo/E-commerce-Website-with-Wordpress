/**
 * External dependencies
 */
import { __ } from '@wordpress/i18n';
import { DISPLAY_CART_PRICES_INCLUDING_TAX } from '@woocommerce/block-settings';
import type { Currency } from '@woocommerce/price-format';
import type { ReactElement } from 'react';

/**
 * Internal dependencies
 */
import TotalsItem from '../item';

interface Values {
	// eslint-disable-next-line camelcase
	total_items: string;
	// eslint-disable-next-line camelcase
	total_items_tax: string;
}

interface SubtotalProps {
	className?: string;
	currency: Currency;
	values: Values | Record< string, never >;
}

const Subtotal = ( {
	currency,
	values,
	className,
}: SubtotalProps ): ReactElement => {
	const { total_items: totalItems, total_items_tax: totalItemsTax } = values;
	const itemsValue = parseInt( totalItems, 10 );
	const itemsTaxValue = parseInt( totalItemsTax, 10 );

	return (
		<TotalsItem
			className={ className }
			currency={ currency }
			label={ __( 'Subtotal', 'woo-gutenberg-products-block' ) }
			value={
				DISPLAY_CART_PRICES_INCLUDING_TAX
					? itemsValue + itemsTaxValue
					: itemsValue
			}
		/>
	);
};

export default Subtotal;
