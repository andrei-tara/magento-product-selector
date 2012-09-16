<?php

class Andreitara_Productsselector_Model_Productsselector extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('productsselector/productsselector');
    }
}