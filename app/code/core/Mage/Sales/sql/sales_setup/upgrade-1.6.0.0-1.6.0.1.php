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

/** @var Mage_Sales_Model_Entity_Setup $installer */
$installer = $this;

$installer->getConnection()
    ->addColumn($installer->getTable('sales/order_status_history'), 'entity_name', [
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'length'    => 32,
        'nullable'  => true,
        'comment'   => 'Shows what entity history is bind to.'
    ]);
