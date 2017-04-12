<?php

/*
** This block is being loaded in ecommistry_produclist.xml under ecommistry_productlist_content
*/

class Ecommistry_ProductList_Block_Listing extends Mage_Catalog_Block_Product_List{
   
    /*
    **	This method handles the filtering of the page.
    **	It filters the product if handle_display is enabled.
    */
    protected function _getProductCollection() {
        
        if(is_null($this->_productCollection)) {
            $this->_productCollection = parent::_getProductCollection();
            $attribute = Mage::getStoreConfig('ecommistry/productlist/attribute');

            //This filters the collection 
            $this->_productCollection->addAttributeToFilter($attribute, array('eq' => 1));// or your custom filter
        }
        return $this->_productCollection;
    }
}