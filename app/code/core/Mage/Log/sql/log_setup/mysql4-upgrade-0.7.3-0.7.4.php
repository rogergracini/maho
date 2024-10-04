<?php
/**
 * Maho
 *
 * @category   Mage
 * @package    Mage_Log
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://magento.com)
 * @copyright  Copyright (c) 2020-2022 The OpenMage Contributors (https://openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$installer->getConnection()->addKey($installer->getTable('log/customer'), 'IDX_VISITOR', 'visitor_id');
$installer->getConnection()->addKey($installer->getTable('log/url_table'), 'PRIMARY', 'url_id', 'primary');
$installer->getConnection()->addKey($installer->getTable('log/url_table'), 'IDX_VISITOR', 'visitor_id');

$installer->endSetup();
