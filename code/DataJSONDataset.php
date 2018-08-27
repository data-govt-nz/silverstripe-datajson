<?php
/**
 * Models a subset of the Dataset schema from https://schema.org/Dataset to 
 * implement the data.json open standard using a more SilverStripe familiar syntax.
 */
class DataJSONDataset extends DataObject 
{
    private static $singular_name = 'Dataset';
    
    private static $plural_name = 'Datasets';

    private static $db = array(
        'Title' => 'Varchar(255)',
        'Description' => 'Text',
        'Identifier' => 'Varchar(255)',
        'License' => 'Varchar(255)',
        'Keyword' => 'Text', //@TODO could later make this it's own DataObject
        'Issued' => 'Date',
        'Modified' => 'Date',
        'PublisherName' => 'Varchar(255)', //See https://schema.org/Organization
        'PublisherEmail' => 'Varchar(255)', //(mbox) See https://schema.org/Organization
        'ContactPointName' => 'Varchar(255)', //(fn)  See Vcard format
        'ContactPointEmail' => 'Varchar(255)', //hasEmail
        'ContactPointPhone' => 'Varchar(255)', //hasPhone
        'LandingPage' => 'Varchar(255)', 
        'AccrualPeriodicity' => 'Varchar(10)', // ISO 8601 recurring frequency format
        'Temporal' => 'Varchar(255)', // time series
        'Spatial' => 'Text',
        'Theme' => 'Varchar(255)',
    );

    private static $has_many = array(
        'Distributions' => 'DataJSONDistribution',
    );

    private static $summary_fields = array(); //TODO
    
    private static $field_labels = array(); //TODO

}