<?php

class Andreitara_Productsselector_Model_Mysql4_Productsselector_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('productsselector/productsselector');
    }
}