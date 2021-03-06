/**
 * External dependencies
 */
import { HAS_DARK_EDITOR_STYLE_SUPPORT } from '@woocommerce/block-settings';

const blockAttributes = {
	isPreview: {
		type: 'boolean',
		default: false,
		save: false,
	},
	showCompanyField: {
		type: 'boolean',
		default: false,
	},
	requireCompanyField: {
		type: 'boolean',
		default: false,
	},
	allowCreateAccount: {
		type: 'boolean',
		default: false,
	},
	showApartmentField: {
		type: 'boolean',
		default: true,
	},
	showPhoneField: {
		type: 'boolean',
		default: true,
	},
	requirePhoneField: {
		type: 'boolean',
		default: false,
	},
	showOrderNotes: {
		type: 'boolean',
		default: true,
	},
	showPolicyLinks: {
		type: 'boolean',
		default: true,
	},
	showReturnToCart: {
		type: 'boolean',
		default: true,
	},
	cartPageId: {
		type: 'number',
		default: 0,
	},
	hasDarkControls: {
		type: 'boolean',
		default: HAS_DARK_EDITOR_STYLE_SUPPORT,
	},
};

export default blockAttributes;
