<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    
    }

    public function gridAction()
    {
        $pressedButtons = array(array(), array(), array());
        
        $this->view->buttons = $this->getRequest()->getParams();
     
    }


}



