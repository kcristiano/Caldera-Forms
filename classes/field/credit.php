<?php

/**
 * A class for adding non-removable hooks to prevent saving of credit card details.
 *
 * Sorry, but these numbers don't belong in WordPress database.
 *
 * @package Caldera_Forms
 * @author    Josh Pollock <Josh@CalderaWP.com>
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 CalderaWP LLC
 */
class Caldera_Forms_Field_Credit {

	/**
	 * Caldera_Forms_Field_Credit constructor.
	 *
	 * Adds hooks
	 *
	 * @since 1.5.0
	 *
	 */
	public function __construct() {
		add_filter( 'caldera_forms_save_field_credit_card_number', array( $this, 'credit_card_number' ) );
		add_filter( 'caldera_forms_save_field_credit_card_cvc', array( $this, 'credit_card_cvc' ) );
	}

	/**
	 * Replace all but last 4 of credit card with Xs
	 *
	 * @uses "caldera_forms_save_field_credit_card_number" filter.
	 *
	 * @since 1.5.0
	 *
	 * @param string $number Credit card number
	 *
	 * @return string
	 */
	public function credit_card_number( $number ){
    // Fix: Handle empty or non-string values
    if ( empty( $number ) || ! is_string( $number ) ) {
      return '';
    }
    $length = strlen( $number );

    // If number is 4 characters or less, mask all characters
    if ( $length <= 4 ) {
      return str_repeat('X', $length);
    }

    // Replace all but last 4 with Xs
    return str_repeat('X', $length - 4) . substr($number, -4);
		//return  substr_replace($number, str_repeat('X', strlen( $number ) - 4), 0, strlen( $number ) - 4);
	}

	/**
	 * Replace credit card secret code with Xs
	 *
	 * @uses "caldera_forms_save_field_credit_card_cvc"
	 *
	 * @since 1.5.0
	 *
	 * @param string $number Secret code
	 *
	 * @return string
	 */
	public function credit_card_cvc( $number ){
    // Fix: Handle empty or non-string values
    if ( empty( $number ) || ! is_string( $number ) ) {
      return '';
    }

		return str_repeat('X', strlen( $number ) );
	}

}
