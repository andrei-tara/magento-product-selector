<?php
class Andreitara_Productsselector_Block_Productsselector extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getProductsselector()     
     { 
        if (!$this->hasData('productsselector')) {
            $this->setData('productsselector', Mage::registry('productsselector'));
        }
        return $this->getData('productsselector');
        
    }
}