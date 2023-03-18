<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class DataScrape extends Controller
{


    public function scrape()
    {
        // Set the URL
        $url = 'http://127.0.0.1:8000/';
    
        // Set the headers
        $headers = [
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36'
        ];
    
        $response = Http::withHeaders($headers)->get($url);
    
        if ($response->ok()) {
            $html = $response->body();
            // Do something with the response body
            return $html;
        } else {
            // Handle error response
        }
    }
    
        
}