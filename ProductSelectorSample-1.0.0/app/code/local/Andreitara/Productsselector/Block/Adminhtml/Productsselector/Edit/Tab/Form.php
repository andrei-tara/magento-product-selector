<?php

class Andreitara_Productsselector_Block_Adminhtml_Productsselector_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form {

    /**
     * Get product chooser URL
     * @return string
     */
    public function getProductChooserURL() {
        return 'getProductChooser(\'' . Mage::getUrl(
                        'adminhtml/promo_widget/chooser/attribute/sku/form/rule_conditions_fieldset', array('_secure' => Mage::app()->getStore()->isAdminUrlSecure())
                ) . '?isAjax=true\'); return false;';
    }

    protected function _prepareForm() {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('productsselector_form', array('legend' => Mage::helper('productsselector')->__('Item information')));

        // Add product SKU text preview
        $fieldset->addField('product_sku', 'text', array(
            'label' => 'Product(s)',
            'name' => 'product_sku',
            'required' => true,
            'class' => 'rule_conditions_fieldset',
            'readonly' => true,
            'onclick' => $this->getProductChooserURL(),           
        ));



        $fieldset->addField('trigger', 'button', array(
            'value' => 'choose ...',
            'name' => 'trigger',
            'style' => 'width:100px;',
            'onclick' => $this->getProductChooserURL(),
        ));

         $fieldset->addFieldset('product_chooser', array('legend' => ('')));

        if (Mage::getSingleton('adminhtml/session')->getProductsselectorData()) {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getProductsselectorData());
            Mage::getSingleton('adminhtml/session')->setProductsselectorData(null);
        } elseif (Mage::registry('productsselector_data')) {
            $form->setValues(Mage::registry('productsselector_data')->getData());
        }
        return parent::_prepareForm();
    }

}