<?php
/**
 * Maho
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://magento.com)
 * @copyright  Copyright (c) 2022-2023 The OpenMage Contributors (https://openmage.org)
 * @copyright  Copyright (c) 2024 Maho (https://mahocommerce.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml system template grid type filter
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 */
class Mage_Adminhtml_Block_System_Email_Template_Grid_Filter_Type extends Mage_Adminhtml_Block_Widget_Grid_Column_Filter_Select
{
    protected static $_types = [
        null                                =>  null,
        Mage_Core_Model_Template::TYPE_HTML => 'HTML',
        Mage_Core_Model_Template::TYPE_TEXT => 'Text',
    ];

    /**
     * @return array
     */
    #[\Override]
    protected function _getOptions()
    {
        $result = [];
        foreach (self::$_types as $code => $label) {
            $result[] = ['value' => $code, 'label' => Mage::helper('adminhtml')->__($label)];
        }

        return $result;
    }

    /**
     * @return array|null
     */
    #[\Override]
    public function getCondition()
    {
        if (is_null($this->getValue())) {
            return null;
        }

        return ['eq' => $this->getValue()];
    }
}
