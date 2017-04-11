<?php
class Ecommistry_ProductList_IndexController extends Mage_Core_Controller_Front_Action {
	
	/*
    **	This method handles the session of the page.
    **	It checks the customer's login before the requested method is loaded.
    */

	public function preDispatch()
    {
        parent::preDispatch();
        $action = $this->getRequest()->getActionName();
        $loginUrl = Mage::helper('customer')->getLoginUrl();

        if (!Mage::getSingleton('customer/session')->authenticate($this, $loginUrl)) {
            $this->setFlag('', self::FLAG_NO_DISPATCH, true);
        }
    }    

    /*
    **	Index Action Controller, Handles Main Page index/index
    **	Renders and Loads the Layout
    */
	public function indexAction()
    {
        $this->loadLayout();
    	$this->renderLayout();
    }
} 