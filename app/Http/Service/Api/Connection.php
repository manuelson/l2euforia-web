<?php

namespace App\Http\Service\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Connection
{

    /**
     * @param $endpoint
     * @param array $params
     * @param bool $debugger
     * @return array
     */
    public function execute($endpoint, array $params, bool $debugger = false) : array
    {
        try {
            $client = new Client([
                'base_uri' => env('API_URL'),
                'headers' => ['Content-Type' => 'application/json'],
                'http_errors' => false
            ]);

            $response = $client->post(
                $endpoint,
                ['body' => json_encode($params)]
            );

            $code = ['code' => $response->getStatusCode()];
            if ($debugger) {
                print_r(array_merge(json_decode($response->getBody(), true), $code));
                die();
            }

            return array_merge(json_decode($response->getBody(), true), $code);

        } catch (GuzzleException $guzzleException) {
            if ($debugger) {
                print_r(json_decode($guzzleException->getMessage(), true), $code);
                die();
            }
            return ['message' => $guzzleException->getMessage(), 'error' => true];
        } catch (\Exception $e) {
            if ($debugger) {
                print_r(json_decode($e->getMessage(), true), $code);
                die();
            }
            return ['message' => $e->getMessage(), 'error' => true];
        }
    }
}
