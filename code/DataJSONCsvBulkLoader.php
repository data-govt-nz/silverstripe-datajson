<?php

class DataJSONCsvBulkLoader extends CsvBulkLoader {
	//@TODO build the CSV importer here

//map the csv columns to data model. example csv at: https://data.govt.nz/assets/Uploads/example.csv

	// public $columnMap = array(
	// 	'title' => 'Title',
    //     'description' => 'Description',
    //     'Identifier'
    //     'License'
    //     'Keyword'
    //     'Issued'
    //     'Modified'
    //     'PublisherName'
    //     'PublisherEmail'
    //     'ContactPointName'
    //     'ContactPointEmail'
    //     'ContactPointPhone'
    //     'LandingPage' 
    //     'AccrualPeriodicity'
    //     'Temporal'
    //     'Spatial'
    //     'Theme'
	// );

	// public $duplicateChecks = array(
	// 	'URLSegment' => 'URLSegment'
	// );	


// Will need some way to iterate through distributions and other nested data in the CSV using the dot notation explained at: 
//https://data.govt.nz/standards-and-guidance/releasing-data-on-data-govt-nz/automating-dataset-updates/#csv2json

//Perhaps use these relationalcallbacks??

	// public $relationCallbacks = array(
	// 	'Brand.Title' => array(
	// 		'relationname' => 'Brand',
	// 		'callback' => 'getBrandByTitle'
	// 	),
	// );
}
