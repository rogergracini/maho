<?php
/**
 * Maho
 *
 * @category   Mage
 * @package    Mage_Paypal
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://magento.com)
 * @copyright  Copyright (c) 2022 The OpenMage Contributors (https://openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/** @var Mage_Paypal_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$installer->run("
CREATE TABLE `{$this->getTable('paypal_api_debug')}` (
  `debug_id` int(10) unsigned NOT NULL auto_increment,
  `debug_at` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `request_body` text,
  `response_body` text,
  PRIMARY KEY  (`debug_id`),
  KEY `debug_at` (`debug_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->addAttribute('quote_payment', 'paypal_payer_id', []);
$installer->addAttribute('quote_payment', 'paypal_payer_status', []);
$installer->addAttribute('quote_payment', 'paypal_correlation_id', []);
$installer->addAttribute('order', 'paypal_ipn_customer_notified', ['type' => 'int', 'visible' => false, 'default' => 0]);

$installer->endSetup();
