<?php
/**
 *
 * onlinestore-2015
 * @author                 adrian
 * @copyright (c)      2015.
 *
 */

class Ecocode_Minify_Adminhtml_Ecocodeminify_LogController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('system/ecocode_minify/log');
        $this->renderLayout();
    }

}
