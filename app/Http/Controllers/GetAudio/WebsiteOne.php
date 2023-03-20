<?php
namespace App\Http\Controllers\GetAudio;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;

class WebsiteOne extends Controller
{

    
    public function FirstWebsite($searchQuery)
    {

        //____Website used `https://tunetank.com/`____//

        $userSearch = strtolower($searchQuery);
        

        // Set the URL to make the POST request to
        $url = 'https://api.tunetank.com/v3/tracks';



        //_____Search term____//
        $shortSearchCode = [
            'aesthetic' => '41',
            'angry' => '22',
            'dark' => '5',
            'dramatic' => '19',
            'dreamy' => '1',
            'eccentric' => '9',
            'enchanting' => '38',
            'energetic' => '16',
            'epic' => '11',
            'euphoric' => '13',
            'exciting' => '17',
            'funny' => '4',
            'glamorous' => '15',
            'happy' => '8',
            'hard' => '31',
            'hopeful' => '32',
            'inspiring' => '2',
            'majestic' => '23',
            'mysterious' => '33',
            'neutral' => '43',
            'nostalgic' => '3',
            'party' => '39',
            'peaceful' => '34',
            'powerful' => '25',
            'quirky' => '26',
            'relaxed' => '27',
            'romantic' => '12',
            'sad' => '20',
            'scary' => '21',
            'sentimental' => '18',
            'sexy' => '35',
            'sporty' => '40',
            'studying' => '42',
            'suspense' => '36',
            'tense' => '7',
            'weird' => '37'
        ];
        

        function searchArray($userSearch, $shortSearchCode) {
            // Split the search string into words
            $words = preg_split('/\s+/', $userSearch);
            
            foreach ($words as $word) {
                // Remove any non-alphanumeric characters and convert to lowercase
                $word = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($word));
                
                if (isset($shortSearchCode[$word])) {
                    return $shortSearchCode[$word]; // Return the value associated with the word in the shortSearchCode
                }
            }
            
            return false; // Return false if none of the words match
        }
        
        


        $exactSearchData = searchArray($userSearch, $shortSearchCode);


        // Set the parameters to include in the POST request
        $params = [
            'filters' => [
                'moods' => [$exactSearchData]
            ],
            'sort' => null,
            'p' => 1
        ];

        // Set the user agent to use in the request
        $user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36';

        // Initialize a GuzzleHttp client
        $client = new Client([
            'headers' => [
                'User-Agent' => $user_agent,
                'Content-Type' => 'application/json'
            ]
        ]);

        // Send a POST request to the API with the specified parameters
        $response = $client->post($url, [
            'body' => json_encode($params)
        ]);

        // Get the response body as a string
        $body = (string)$response->getBody();

        // Return the response body
        
        // return json_decode($body,true);

        session(['firstWebsiteEncryptedData' => encrypt($body)]);
        return encrypt($body);

        
    }


public function DecryptAudioListData(Request $request) {

    if (session()->has('firstWebsiteEncryptedData')) {
        $encryptedData = session('firstWebsiteEncryptedData');
        return json_decode(decrypt($encryptedData),true);
    } else {
        $response = [
            'status' => '200',
            'info' => 'If you want to buy this API just contact on github @JoshimOfficial' //Session deleted success.
        ];
        
        return response()->json($response); 
    }
        
}

public function EndTheDecryptAudioListDataSession() {
    Session::forget('firstWebsiteEncryptedData');

    $response = [
        'status' => 'success',
        'list_delivered' => 'success', //Session deleted success.
        'date' => now()
    ];
    
    return response()->json($response); 
}

}
