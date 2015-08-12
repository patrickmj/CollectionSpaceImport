<?php

class CollectionSpaceImportPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'install',
        'uninstall',
        'after_delete_item' //use this hook to delete the record of the import
        );
    
    protected $_filters = array('admin_navigation_main'); //for adding admin navigation to import view

    /*
     * Install the database tables for the two models
     */
    public function hookInstall()
    {
        $db = get_db();
        
        //Season to taste after the model is ready
        /*
        $sql = "
            CREATE TABLE IF NOT EXISTS `$db->CollectionSpaceImport` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `endpoint_uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `status` tinytext NOT NULL,
              `date` timestamp,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
        ";
        $db->query($sql);
        */
    }
    
    /**
     * Drop tables
     */
    public function hookUninstall()
    {
        
    }
    
    public function hookAfterDeleteItem($args)
    {
        $item = $args['record'];
    }
    
    public function filterAdminNavigationMain($nav)
    {
        $nav['CollectionSpaceImporter'] = array('label' => __('CollectionSpace Importer'),
                                                'uri'   => url('collection-space-import')
                );
        return $nav;
    }
    
}



