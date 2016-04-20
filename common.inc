<?php 
/**
* Getting the data from a url
*/

function get_ws_data($ws_uri)
{
    // create curl object to get the webservice data
    $curl = curl_init($ws_uri);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_POST, FALSE);
    $ws_response = curl_exec($curl);
    curl_close($curl);
    // return object as JSon
    return json_decode($ws_response);
}