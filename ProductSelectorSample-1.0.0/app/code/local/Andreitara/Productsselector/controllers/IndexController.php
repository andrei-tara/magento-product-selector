<?php
class Andreitara_Productsselector_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/productsselector?id=15 
    	 *  or
    	 * http://site.com/productsselector/id/15 	
    	 */
    	/* 
		$productsselector_id = $this->getRequest()->getParam('id');

  		if($productsselector_id != null && $productsselector_id != '')	{
			$productsselector = Mage::getModel('productsselector/productsselector')->load($productsselector_id)->getData();
		} else {
			$productsselector = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($productsselector == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$productsselectorTable = $resource->getTableName('productsselector');
			
			$select = $read->select()
			   ->from($productsselectorTable,array('productsselector_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$productsselector = $read->fetchRow($select);
		}
		Mage::register('productsselector', $productsselector);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}