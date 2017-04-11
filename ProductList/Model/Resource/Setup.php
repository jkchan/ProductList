<?php

class Ecommistry_ProductList_Model_Resource_Setup extends Mage_Core_Model_Resource_Setup
{
    public function getCatalogSetup()
    {
        return new Mage_Catalog_Model_Resource_Setup('ecommistry_productlist_setup');
    }
}