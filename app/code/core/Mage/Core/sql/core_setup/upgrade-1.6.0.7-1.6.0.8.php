<?php
/**
 * Maho
 *
 * @category   Mage
 * @package    Mage_Core
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://magento.com)
 * @copyright  Copyright (c) 2020-2022 The OpenMage Contributors (https://openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$connection = $installer->getConnection();
$connection->delete(
    $this->getTable('core_config_data'),
    $connection->prepareSqlCondition('path', [
        'like' => 'system/backup/enabled'
    ])
);
$installer->setConfigData('advanced/modules_disable_output/Mage_Backup', 1);

$installer->endSetup();
