<?php

use Ds\Set;


/**
 * Parse a xml to array.
 */

function parseXMLFile(string $filePath): array
{
    ini_set('memory_limit', -1);
    $xmlDataString = file_get_contents(public_path($filePath));
    $xmlDataObject = simplexml_load_string($xmlDataString, null, LIBXML_NOCDATA);
    $jsonData = json_encode($xmlDataObject);
    return json_decode($jsonData, true);
}

/**
 * All empty array values to null
 */
function empty_arr_to_null(array $array)
{
    return array_map(function ($value){
        if (gettype($value) === 'array' && empty($value)){
            return null;
        }
        else{
            return $value;
        }
    }, $array);
}


?>
