<?php

// phpcs:disable WordPress.NamingConventions
class EduAdmin_BookingInfo {
	/**
	 * @var stdClass|object
	 */
	public $EventBooking;
	/**
	 * @var stdClass|object
	 */
	public $Customer;
	/**
	 * @var stdClass|object
	 */
	public $Contact;
	/**
	 * @var bool
	 */
	public $NoRedirect = false;

	/**
	 * EduAdminBookingInfo constructor.
	 *
	 * @param stdClass|object|array|null $event_booking
	 * @param stdClass|object|array|null $customer
	 * @param stdClass|object|array|null $contact
	 */
	public function __construct( $event_booking = null, $customer = null, $contact = null ) {
		$this->EventBooking = $event_booking;
		$this->Customer     = $customer;
		$this->Contact      = $contact;
	}
}
