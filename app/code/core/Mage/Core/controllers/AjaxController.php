<?php
/**
 * Maho
 *
 * @category   Mage
 * @package    Mage_Core
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://magento.com)
 * @copyright  Copyright (c) 2020-2023 The OpenMage Contributors (https://openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Frontend ajax controller
 *
 * @category   Mage
 * @package    Mage_Core
 */
class Mage_Core_AjaxController extends Mage_Core_Controller_Front_Action
{
    /**
     * Ajax action for inline translation
     */
    public function translateAction()
    {
        $translation = $this->getRequest()->getPost('translate');
        $area = $this->getRequest()->getPost('area');

        //filtering
        /** @var Mage_Core_Model_Input_Filter_MaliciousCode $filter */
        $filter = Mage::getModel('core/input_filter_maliciousCode');
        foreach ($translation as &$item) {
            $item['custom'] = $filter->filter($item['custom']);
        }

        $response = Mage::helper('core/translate')->apply($translation, $area);
        $this->getResponse()->setBody($response);
        $this->setFlag('', self::FLAG_NO_POST_DISPATCH, true);
    }
}
