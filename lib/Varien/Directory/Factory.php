<?php
/**
 * Maho
 *
 * @category   Varien
 * @package    Varien_Directory
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://magento.com)
 * @copyright  Copyright (c) 2022-2024 The OpenMage Contributors (https://openmage.org)
 * @copyright  Copyright (c) 2024 Maho (https://mahocommerce.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Directory Factory
 *
 * @category   Varien
 * @package    Varien_Directory
 */
class Varien_Directory_Factory
{
    /**
     * return or Varien_Directory_Collection or Varien_File_Object object
     *
     * @param   array $path - path to directory
     * @param   bool $is_recursion - use or not recursion
     * @param   int $recurse_level - recurse level
     * @return  IFactor - Varien_Directory_Collection or Varien_File_Object object
     */
    public static function getFactory($path, $is_recursion = true, $recurse_level = 0)
    {
        if (is_dir($path)) {
            $obj = new Varien_Directory_Collection($path, $is_recursion, $recurse_level + 1);
            return $obj;
        } else {
            return new Varien_File_Object($path);
        }
    }
}
