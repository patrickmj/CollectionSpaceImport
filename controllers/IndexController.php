<?php

class CollectionSpaceImport_IndexController extends Omeka_Controller_AbstractActionController
{
    public function indexAction()
    {
        
        
        if(isset($_POST['submit'])) {
            
            // send off to a job to run the import in the background
            Zend_Registry::get('bootstrap')->getResource('jobs')
                ->sendLongRunning('YOUR JOB CLASS', $args);
        }
    }
}