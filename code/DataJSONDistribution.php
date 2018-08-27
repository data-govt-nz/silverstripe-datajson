<?php
/**
 * Models a subset of the Dataset:Distribution schema from https://schema.org/Dataset to 
 * implement the data.json open standard using a more SilverStripe familiar syntax.
 */
class DataJSONDistribution extends DataObject 
{
    private static $singular_name = 'Distribution';
    
    private static $plural_name = 'Distributions';

    private static $db = array(
        'Title' => 'Varchar(255)',
        'Description' => 'Text',
        'DownloadURL' => 'Varchar(255)',
        'Format' => 'Varchar(255)',
    );

    private static $has_one = array(
        'Dataset' => 'DataJSONDataset',
    );

    private static $summary_fields = array(); //TODO
    
    private static $field_labels = array(); //TODO

}