<?php

//https://medium.com/@razamoh/create-own-custom-helper-functions-classes-in-laravel-e8d2f50ff38

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

if (! function_exists('addDash')) {
    function addDash($str) {
        $str = strtoupper($str);
        return implode("-", str_split($str, 4));
    }
}

if (! function_exists('genTicketCode')) {
    function genTicketCode() {
        $bytes = random_bytes(8);
        return bin2hex($bytes);
    }
}

if (! function_exists('genApiKey')) {
    function genApiKey() {
        $bytes = random_bytes(16);
        $str = bin2hex($bytes);
        return implode("-", str_split($str, 8));
    }
}

if (! function_exists('sendSMS')) {
    function sendSMS($phone_number, $sms_text, $country_code, $unicode = false){
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://portal.bulkgate.com/api/1.0/simple/',
        ]);

        if (App::environment('production')) {
            $form_params = [
                'application_id' => config("app.sms_app_id"),
                "application_token" => config("app.sms_app_key"),
                "number" => $phone_number,
                "text" => $sms_text,
                "country" => $country_code,
                "sender_id" => "gOwn",
                "sender_id_value" => "+19176727192",
                "unicode" => $unicode
            ];
            $response = $client->request('POST', 'transactional', [
                'headers' => [
                    'content-type' => 'application/json'
                ],
                'http_errors' => false,
                'body' => json_encode($form_params)
            ]);

        }else{
            $form_params = [
                'application_id' => config("app.sms_app_id"),
                "application_token" => config("app.sms_app_key"),
                "number" => "66615134111",
                "text" => $sms_text,
                "country" => "TH",
                "sender_id" => "gOwn",
                "sender_id_value" => "+19176727192",
                "unicode" => $unicode
            ];
            $response = $client->request('POST', 'transactional', [
                'headers' => [
                    'content-type' => 'application/json'
                ],
                'http_errors' => false,
                'body' => json_encode($form_params)
            ]);
        }

        $body = $response->getBody();
        $body = json_decode($body);

        Log::info(json_encode($body));

        if(isset($body->data) && isset($body->data->sms_id)){
            return true;
        }else{
            Log::info(json_encode($phone_number));
            return false;
        }
    }
}

if (! function_exists('updateEcwidOrderStatus')) {
    function updateEcwidOrderStatus($ecwid_id, $status, $shop_id, $token){
        if(is_null($ecwid_id)){
            return 1;
        }

        $client = new \GuzzleHttp\Client([
            'base_uri' => "https://app.ecwid.com/api/v3/$shop_id/orders/",
        ]);

        $response = $client->request('PUT', (string)$ecwid_id, [
            'http_errors' => true,
            'json' => [
                "fulfillmentStatus" => (string)$status
            ],
            'query' => [
                "token" => $token
            ]
        ]);

        $body = json_decode($response->getBody());

        return $body->updateCount;
    }
}


