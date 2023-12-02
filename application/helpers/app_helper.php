<?php
date_default_timezone_set('Asia/Jakarta');

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * Mendapatkan nama applikasi untuk title/judul_browser
 * 
 * @return string cth: | Nama_Aplikasi
 */
function titleName($title = NULL)
{
    return $title ? $title . ' | ' . getApplication()['title'] : ' | ' . getApplication()['title'];
}

/**
 * Base_url untuk public API
 * 
 * @return string 'http://domain.com/'
 */
function urlApi()
{
    return 'http://domain/';
}

/**
 * Kunci untuk authorization API
 * 
 * @return string
 */
function secretKey()
{
    return 'AIWUYer123';
}

/**
 * Gunakan untuk mendapatkan segment dari base_url
 * 
 * @param int $limit = 0 default
 * @param int $offset = 0 default
 * 
 * @return string
 */
function getUrlBySegment($limit = 0, $offset = 0)
{
    $ci = get_instance();

    if (empty($limit) && empty($offset)) {
        $url = $ci->uri->uri_string();
    }

    if ($limit && !$offset) {
        $url = $ci->uri->segment($limit);
    }

    if (($limit || $limit == 0) && $offset) {
        $url = implode('/', array_slice($ci->uri->segment_array(), $limit, $offset));
    }

    return $url;
}

/**
 * Permintaan ke API dengan method GET
 * 
 * @param string $url
 * Hanya berikan end-point setelah fungsi urlApi() / urlApiLocal(),
 * contoh:
 * * Tatget API: http://domain.com/api/getUserInfo
 * * urlApi(): http://domain.com/
 * * end-point: api/getUserInfo

 * @param array $params
 * Query parameter yang akan dikirimkan ke API dapat ditampung ke dalam array terlebih dahulu
 * 
 * @param bool $local
 * $local = FALSE default
 * 
 * @return array 
 */
function getToApi($url, $params, $local = FALSE)
{
    $keyVal = '';
    for ($i = 0; $i < count($params); $i++) {
        $arrayName = array_keys($params)[$i];
        $arrayVal = $params[$arrayName];
        $keyVal .= '&' . $arrayName . '=' . $arrayVal;
    }

    $client = new Client();
    $headers = [
        'Content-Type' => 'application/json',
    ];

    $request = new Request('GET', ($local ? urlApiLocal() : urlApi()) . $url . '?secretKey=' . secretKey() . $keyVal, $headers);
    $res = $client->sendAsync($request)->wait();
    $output = json_decode($res->getBody(), true);

    return $output;
}

/**
 * Permintaan ke API dengan method POST
 * 
 * @param string $url
 * Hanya berikan end-point setelah fungsi urlApi() / urlApiLocal(),
 * contoh:
 * * Tatget API: http://domain.com/api/getUserInfo
 * * urlApi(): http://domain.com/
 * * end-point: api/getUserInfo

 * @param array $data
 * Query parameter yang akan dikirimkan ke API dapat ditampung ke dalam array terlebih dahulu
 * 
 * @param bool $local
 * $local = FALSE default
 * 
 * @return array 
 */
function postToApi($url, $data, $local = FALSE)
{
    $client = new Client();

    $data['secretKey'] = secretKey();

    $response = $client->request('POST', ($local ? urlApiLocal() : urlApi()) . $url, [
        'http_errors' => false,
        'form_params' => $data
    ]);

    $body = $response->getBody();
    $output = json_decode($body, true);

    return $output;
}
