<?php

namespace App\Helpers;

class CurlHelper
{
    public static function call($url, $method = 'GET', $data = [], $headers = [])
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        if ($method == 'GET') {
            curl_setopt($curl, CURLOPT_POST, true);
        }

        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }

        if (!empty($headers)) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        }

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return ['success' => false, 'message' => $error];
        }

        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        return collect(['success' => true, 'status_code' => $statusCode, 'response' => $response]);
    }
}
