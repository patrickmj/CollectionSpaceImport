<?php

class CollectionSpaceImport extends Omeka_Record_AbstractRecord
{
    //public properties correspond to the table columns, which
    //of course match the SQL in the plugin's install hook
    public $endpoint_uri;
    
    public $status;
    
    public $date;
}