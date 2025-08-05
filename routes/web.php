<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', function () {
    $url = 'https://prebooking.ldi.sale/api/items/mynetProducts';

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return response instead of printing
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects if any
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // verify SSL certificate

    // Execute the request
    $response = curl_exec($ch);

    // Check for errors
    if ($response === false) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        // Decode JSON and print
        $data = json_decode($response, true);
        // print_r($data);
        // dd($data);
        // var_dump($data);
        // die();
    }

    // Close cURL session
    curl_close($ch);

    return json_encode($data);
});

Route::post('/register', [RegistrationController::class, 'store']); 