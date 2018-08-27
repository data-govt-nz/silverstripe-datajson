<?php
class DataJSONAdmin extends ModelAdmin
{
    private static $managed_models = array(
        'DataJSONDataset',
    );

    private static $url_segment = 'datajson-admin';

    private static $menu_title = 'Data.json';

    static $model_importers = array(
        'DataJSONDataset' => 'DataJSONCsvBulkLoader', 
     );

}