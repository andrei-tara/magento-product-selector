<?php

class Andreitara_Productsselector_Block_Adminhtml_Productsselector_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'productsselector';
        $this->_controller = 'adminhtml_productsselector';
        
        $this->_updateButton('save', 'label', Mage::helper('productsselector')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('productsselector')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('productsselector_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'productsselector_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'productsselector_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('productsselector_data') && Mage::registry('productsselector_data')->getId() ) {
            return Mage::helper('productsselector')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('productsselector_data')->getTitle()));
        } else {
            return Mage::helper('productsselector')->__('Add Item');
        }
    }
}