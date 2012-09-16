<?php

class Andreitara_Productsselector_Model_Mysql4_Productsselector extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the productsselector_id refers to the key field in your database table.
        $this->_init('productsselector/productsselector', 'productsselector_id');
    }
}