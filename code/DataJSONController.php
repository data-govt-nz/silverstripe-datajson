<?php
class DataJSONController extends Controller
{
    private static $allowed_actions = array(
        'index',
    );

    public function index(SS_HTTPRequest $HTTPRequest) {
        // @TODO Port some of the logic contained in the data.govt.nz NodeJS version of this tool at https://github.com/data-govt-nz/schema/blob/master/convert_logic.js
        
        $datasets = DataJSONDataset::get();
        //add further logic to build out the paginated array of dataset metadata and transform values.
        
        //Ensure the output is valid UTF-8 JSON
        $this->response->addHeader("Content-Type", "application/json; charset='utf-8'");
       
        return $this->customise(
            new ArrayData(
                array(
                    'Datasets' => $datasets,
                    'ID' => Director::absoluteURL('data.json', true),
                    'BustCache' => date('Ymd'), //daily cache busting (uses partial cache in template) @TODO allow this to be set to different values eg. Daily/Weekly/Monthly to match CKAN harvesting.
                    'Page' => $HTTPRequest->getVar('page'),//collect but MVP wont filter on this: http://spec.dataportals.org/
                    'Modified' => $HTTPRequest->getVar('modified_since')//collect but MVP wont filter on this. http://spec.dataportals.org/
                )
            ))->renderWith("DataJSON");
    }
}