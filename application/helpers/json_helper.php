<?php
date_default_timezone_set('Asia/Jakarta');

/**
 * Mendapatkan data aplikasi
 * 
 * @return array
 */
function getApplication()
{
    $getApplication = file_get_contents(base_url('configurations/applications/application.json'));

    return json_decode($getApplication, true);
}

/**
 * Mendapatkan nama sesi
 * 
 * @return string
 */
function getSessionName()
{
    $getApplication = file_get_contents(base_url('configurations/applications/application.json'));
    $getVersion = file_get_contents(base_url('configurations/applications/version.json'));

    $sessionName =  json_decode($getApplication, true)['session'] . json_decode($getVersion, true)['id'];

    return $sessionName;
}