<?php

class CollectionSpaceImport_ImportJob extends Omeka_Job_AbstractJob
{
    /**
     * The job dispatcher calls perform
     */
    public function perform()
    {
        // $collectionObjects =

        foreach ($collectionObjects as $collectionObject) {
            $this->importItem($collectionObject);
            //get $collectionObject metadata
            //get $collectionObject url
            //import or update omeka item
        }
             
    }
    
    
    protected function importItem($collectionObject)
    {
        $itemMetadataArray = array();
        $itemMetadataArray = $this->fetchItemMetadata($collectionObject, $itemMetadataArray);
        
        $item = insert_item($metadata, $itemMetadataArray, $fileMetadataArray);
        $importRecord = new ImportRecord;
        $itemporRecord->csid = $whatever;
        $importRecord->item_id = $item->id;
        $importRecord->save();
        
    }
}