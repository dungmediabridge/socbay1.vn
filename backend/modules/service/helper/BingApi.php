<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 1/6/2018
 * Time: 9:22 AM
 */

namespace backend\modules\service\helper;


use yii\helpers\Inflector;

class BingApi extends Inflector
{

    public static function BingWebSearch($url, $key, $query)
    {
        // Prepare HTTP request
        // NOTE: Use the key 'http' even if you are making an HTTPS request. See:
        // http://php.net/manual/en/function.stream-context-create.php
        $headers = "Ocp-Apim-Subscription-Key: $key\r\n";
        $options = array('http' => array(
            'header' => $headers,
            'method' => 'GET'));

        // Perform the Web request and get the JSON response
        $context = stream_context_create($options);
        $result = file_get_contents($url . "?q=" . urlencode($query), false, $context);

        // Extract Bing HTTP headers
        $headers = array();
        foreach ($http_response_header as $k => $v) {
            $h = explode(":", $v, 2);
            if (isset($h[1]))
                if (preg_match("/^BingAPIs-/", $h[0]) || preg_match("/^X-MSEdge-/", $h[0]))
                    $headers[trim($h[0])] = trim($h[1]);
        }

        return array($headers, $result);
    }


    public static function BingImageSearch($url, $key, $query)
    {
        // Prepare HTTP request
        // NOTE: Use the key 'http' even if you are making an HTTPS request. See:
        // http://php.net/manual/en/function.stream-context-create.php
        $headers = "Ocp-Apim-Subscription-Key: $key\r\n";
        $options = array('http' => array(
            'header' => $headers,
            'method' => 'GET'));

        // Perform the Web request and get the JSON response
        $context = stream_context_create($options);
        $result = file_get_contents($url . "?q=" . urlencode($query), false, $context);

        // Extract Bing HTTP headers
        $headers = array();
        foreach ($http_response_header as $k => $v) {
            $h = explode(":", $v, 2);
            if (isset($h[1]))
                if (preg_match("/^BingAPIs-/", $h[0]) || preg_match("/^X-MSEdge-/", $h[0]))
                    $headers[trim($h[0])] = trim($h[1]);
        }

        return array($headers, $result);
    }
}