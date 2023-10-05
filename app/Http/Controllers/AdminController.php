<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function GetCookies(Request $request) {
    // Initialize cURL session
$ch = curl_init();

// Set the URL to the resource you want to retrieve
$url = "https://dailywebcookies1.blogspot.com/p/semrush.html";
curl_setopt($ch, CURLOPT_URL, $url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects, if any
// You can add more options like headers, user-agent, etc., as needed

// Execute cURL session and store the response in $response
$response = curl_exec($ch);

// Check for cURL errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

$data = $response;


$pattern = '/<div[^>]*\s+id\s*=\s*(?:"|\')?postBody(?:"|\')[^>]*>(.*?)<\/div>/si';

// Use preg_match to find the content within the matched <div>
if (preg_match($pattern, $data, $matches)) {
    $postBodyContent = $matches[1]; // The content inside the <div> with id="postBody"
    echo $postBodyContent; // Output or use $postBodyContent as needed
} else {
    echo "No matching <div id=\"postBody\"> found.";
}


   }
}
