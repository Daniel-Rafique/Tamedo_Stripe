<?php
/**
 * Stripe payment method model
 *
 * @category	Tamedo
 * @package		Tamedo_Stripe
 * @author		Daniel Rafique <rafique@tamedo.com>
 * @copyright	Tamedo (http://tamedo.com)
 */
class Tamedo_Stripe_Model_Source_Cctype extends Mage_Payment_Model_Source_Cctype
{
	protected $_allowedTypes = array('AE','VI','MC','DI','JCB','OT');

}
