<?php
class Andreitara_Productsselector_Block_Adminhtml_Productsselector extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_productsselector';
    $this->_blockGroup = 'productsselector';
    $this->_headerText = Mage::helper('productsselector')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('productsselector')->__('Add Item');
    parent::__construct();
  }
}