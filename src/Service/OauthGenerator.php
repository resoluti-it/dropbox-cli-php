<?php

namespace App\Service;

class OauthGenerator
{
       public function getAccessToken(string $code): ?array
       {
              // https://www.dropbox.com/oauth2/authorize?client_id=<APP_KEY>&response_type=code&token_access_type=offline
              $key = $_ENV['APP_KEY'];
              $secret = $_ENV['APP_SECRET'];

              $basic = base64_encode("{$key}:{$secret}");
              try {
                     $client = new \GuzzleHttp\Client();
                     $res = $client->request("POST", "https://api.dropbox.com/oauth2/token", [
                            'form_params' => [
                                   'grant_type' => 'authorization_code',
                                   'code' => $code
                            ],
                            'headers' => [
                                   'Authorization' => "Basic $basic"
                            ]
                     ]);
                     if ($res->getStatusCode() == 200) {
                            $result = $res->getBody()->getContents();

                            return json_decode($result, true);
                     } else {
                            return null;
                     }
              } catch (\Exception $e) {
                     throw $e;
              }
       }

       public function getToken(string $refreshToken): ?string
       {
              $key = $_ENV['APP_KEY'];
              $secret = $_ENV['APP_SECRET'];

              $basic = base64_encode("{$key}:{$secret}");

              try {
                     $client = new \GuzzleHttp\Client();
                     $res = $client->request("POST", "https://api.dropbox.com/oauth2/token", [
                            'form_params' => [
                                   'grant_type' => 'refresh_token',
                                   'refresh_token' => $refreshToken,
                            ],
                            'headers' => [
                                   'Authorization' => "Basic {$basic}"
                            ]
                     ]);
                     if ($res->getStatusCode() == 200) {
                            $result =  $res->getBody()->getContents();

                            return $result;
                     } else {
                            return null;
                     }
              } catch (\Exception $e) {
                     throw $e;
              }
       }
}
