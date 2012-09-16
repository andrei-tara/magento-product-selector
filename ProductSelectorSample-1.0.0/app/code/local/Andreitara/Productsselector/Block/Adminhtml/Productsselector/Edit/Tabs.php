<?php

class Andreitara_Productsselector_Block_Adminhtml_Productsselector_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('productsselector_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('productsselector')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('productsselector')->__('Item Information'),
          'title'     => Mage::helper('productsselector')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('productsselector/adminhtml_productsselector_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}