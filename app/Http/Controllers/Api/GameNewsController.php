<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\GameNewsApiService;

class GameNewsController extends Controller
{
    protected $apiService;

    public function __construct(GameNewsApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function showAnnouncements()
    {
        $announcements = $this->apiService->getGameAnnouncements();
        dd($announcements); // Tambahkan ini untuk melihat isi response
    }
    public function getAnnouncements()
{
    $announcements = $this->apiService->getAnnouncements();

    // Ubah dari JSON ke view
    return view('announcements', ['data' => $announcements]);
}

}
