<?php
/**
 * Maho
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://magento.com)
 * @copyright  Copyright (c) 2022-2023 The OpenMage Contributors (https://openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * users block
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 */
class Mage_Adminhtml_Block_Permissions_Users extends Mage_Adminhtml_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('permissions/users.phtml');
    }

    public function getAddNewUrl()
    {
        return $this->getUrl('*/*/edituser');
    }

    public function getGridHtml()
    {
        return $this->getLayout()->createBlock('adminhtml/permissions_grid_user')->toHtml();
    }
}
