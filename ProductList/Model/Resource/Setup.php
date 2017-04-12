<?php

class Ecommistry_ProductList_Model_Resource_Setup extends Mage_Core_Model_Resource_Setup
{
    public function getCatalogSetup()
    {
        return new Mage_Catalog_Model_Resource_Setup('ecommistry_productlist_setup');
    }

    public function getAttribute()
    {
        $possible_attributes = array('handle_display','productlist_handle_display','ecommistry_handle_display');
        //$configValue = Mage::getStoreConfig('ecommistry/productlist/attribute'); not working, returning NULL
        $configValue = Mage::getModel('core/config_data')->getCollection()->addFieldToFilter('path','ecommistry/productlist/attribute')->getFirstItem()->getData();
        
        foreach($possible_attributes as $possible_attribute)
        {
            $attr = Mage::getResourceModel('catalog/eav_attribute')->loadByCode('catalog_product',$possible_attribute);
            
            if(empty($attr->getId()) && !empty($configValue)) {
                $attribute = $configValue['value'];
                break;
            }

            if(empty($attr->getId()) && empty($configValue))
            {
                $attribute = $possible_attribute;
                Mage::getConfig()->saveConfig('ecommistry/productlist/attribute',$attribute, 'default', 0);
                break;
            } 

            if(!empty($attr->getId()) && !empty($configValue) && $possible_attribute == $configValue['value']) {
                $attribute = $possible_attribute;
                break;
            } 

        }

        return $attribute;
    }
}