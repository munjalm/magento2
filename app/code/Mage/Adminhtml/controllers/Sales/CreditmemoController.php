<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Adminhtml
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml sales orders controller
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Adminhtml_Sales_CreditmemoController extends Mage_Adminhtml_Controller_Sales_Creditmemo
{
    /**
     * Export credit memo grid to CSV format
     */
    public function exportCsvAction()
    {
        $fileName   = 'creditmemos.csv';
        $grid       = $this->getLayout()->createBlock('Mage_Adminhtml_Block_Sales_Creditmemo_Grid');
        $this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
    }

    /**
     *  Export credit memo grid to Excel XML format
     */
    public function exportExcelAction()
    {
        $fileName   = 'creditmemos.xml';
        $grid       = $this->getLayout()->createBlock('Mage_Adminhtml_Block_Sales_Creditmemo_Grid');
        $this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
    }

    /**
     *  Index page
     */
    public function indexAction()
    {
        $this->_title($this->__('Credit Memos'));
        parent::indexAction();
    }
}
