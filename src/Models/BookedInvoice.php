<?php namespace LasseRafn\Economic\Models;

use LasseRafn\Economic\Utils\Model;

class BookedInvoice extends Model
{
	protected $entity     = 'invoices/booked';
	protected $primaryKey = 'bookedInvoiceNumber';
	protected $fillable   = [
		'bookedInvoiceNumber',
		'self',
		'pdf',
		'dueDate',
		'date',
		'currency',
		'customer',
		'layout',
		'paymentTerms',
		'recipient',
		'lines',
		'project',
		'notes'
	];

	public $bookedInvoiceNumber;
	public $self;
	public $pdf;
	public $name;
	public $dueDate;
	public $date;
	public $currency;
	public $recipient;
	public $project;

	/** @var Customer */
	public $customer;

	/** @var \stdClass|array */
	public $notes;

	/** @var Layout */
	public $layout;

	/** @var PaymentTerm */
	public $paymentTerms;

	/** @var array */
	public $lines;
}