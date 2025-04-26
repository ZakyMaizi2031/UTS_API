<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class GameNewsApiService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RAPIDAPI_KEY'); // pastikan sudah di .env
    }

    public function getAnnouncements()
    {
        try {
            $response = $this->client->request('GET', 'https://games-details.p.rapidapi.com/news/announcements/3240220?limit=10&offset=0', [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'games-details.p.rapidapi.com',
                ],
                'verify' => false
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            return $data;
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
