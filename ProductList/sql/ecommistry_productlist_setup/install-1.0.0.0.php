<?php
/**
 * Add handle_display values 
 *
 */
    /**************** Does the installation of the attribute *********************/
        /* @var $installer Mage_Catalog_Model_Resource_Setup */
        $installer = $this->getCatalogSetup();
        $installer->startSetup();
        $attribute = $this->getAttribute();
        // Add new attribute handle_display
        $installer->addAttribute(Mage_Catalog_Model_Product::ENTITY, $attribute, array(
            'label'                      => 'Ecommistry ProductList Handle Display',             // Default label
            'input'                      => 'boolean',           // Input type (text, textarea, select...)
            'type'                       => 'int',              // Attribute type (varchar, text, int, decimal...)
            'required'                   => false,              // Is the attribute mandatory?
            'comparable'                 => true,               // Is the attribute comparable? (on frontend).
            'filterable'                 => true,               // Is the attribute filterable? (on frontend, in category view)
            'filterable_in_search'       => false,               // Is the attribute filterable? (on frontend, in search view)
            'used_for_promo_rules'       => true,               // Do we need that attribute for specific promo rules?
            'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL, // Attribute scope
            'is_configurable'            => true,               // Can the attribute be used to create configurable products?
            'is_html_allowed_on_front'   => false,              // Is HTML allowed on frontend?
            'note'                       => '',                 // Note below the input field on admin area
            'searchable'                 => false,               // Is the attribute searchable?
            'sort_order'                 => 100,                // Which position on the admin area form group?
            'unique'                     => false,              // Must attribute values be unique?
            'used_for_sort_by'           => false,              // Can the attribute be used for the 'sort by' select on catalog/search views?
            'used_in_product_listing'    => true,               // Should we flat this attribute?
            'user_defined'               => true,               // Is the attribute user defined? If false the attribute isn't removable. TRUE needed if configurable attribute.
            'visible'                    => true,               // Is the attribute visible? If true the field appears in admin product page.
            'visible_on_front'           => true,               // Is the attribute visible on front?
            'visible_in_advanced_search' => false,               // Is the attribute visible on advanced search?
            'wysiwyg_enabled'            => false,              // Is Wysiwyg enabled? (use `textarea` input if you put that value to true)
        ));
        // Add the newly created `size` attribute to attribute set(s)
        $installer->addAttributeToSet(
          Mage_Catalog_Model_Product::ENTITY,   // Entity type
          'Default',                            // Attribute set name
          'General',                            // Attribute set group name
          $attribute,                     // Attribute code to add
          100                                   // Position on the attribute set group
        );
        $installer->endSetup();

    /**************** Does the installation of the attribute *********************/