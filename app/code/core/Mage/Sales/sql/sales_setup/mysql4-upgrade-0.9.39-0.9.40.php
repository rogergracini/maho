<?php
/**
 * Maho
 *
 * @category   Mage
 * @package    Mage_Sales
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://magento.com)
 * @copyright  Copyright (c) 2020-2022 The OpenMage Contributors (https://openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$this->startSetup();
$this->removeAttribute('order', 'giftcert_code');
$this->removeAttribute('order', 'giftcert_amount');
$this->removeAttribute('order', 'base_giftcert_amount');
$this->endSetup();
