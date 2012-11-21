<?php

/**
 * Used by /libs/js/schools.js to query the CivicApps Schools API.
 * Part of the Schools app for CitySync.
 *
 * @package     Schools
 * @author      Eric Arenson
 * @copyright   Attribution-NonCommercial-ShareAlike 3.0 Unported (CC BY-NC-SA 3.0)
 * @license     http://creativecommons.org/licenses/by-nc-sa/3.0/
 * @link        http://?
 * @since       Version 1.0
 */
 
 // Using stream_context_create to avoid the automagic 15 sec. timeout a la:
 // http://stackoverflow.com/questions/3629504/php-file-get-contents-very-slow-when-using-full-url
 
 $context = stream_context_create(array('http' => array('header'=>'Connection: close')));
 
 if(!isset($_GET['q'])){
    $school_data = file_get_contents('http://api.civicapps.org/schools/',false,$context);
    echo $school_data;
 } else if($_GET['q'] == 'data'){
    $school_data = file_get_contents('http://api.civicapps.org/schools/' . $_GET['id'],false,$context);
    echo $school_data;
 }

/* 
 //LOCALHOST TESTING 
 
  $context = stream_context_create(array('http' => array('header'=>'Connection: close')));
 
 if(!isset($_GET['q'])){
    
    $school_data = file_get_contents('http://api.civicapps.local:8888/schools/',false,$context);
    echo $school_data;
    
 } else if($_GET['q'] == 'data'){
 
    $school_data = file_get_contents('http://api.civicapps.local:8888/schools/' . $_GET['id'],false,$context);
    echo $school_data;
 
 } 
*/

?>