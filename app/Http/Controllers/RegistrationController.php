<?php

 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
    'firstName' => 'required|string|max:100',
    'lastName' => 'required|string|max:100',
    'email' => 'nullable|email', // ? optional
    'contact' => 'required|string|max:20',
    'address' => 'required|string',
    'photoFile' => 'required|image|max:2048',
    'permitPhoto' => 'required|image|max:2048',
    'message' => 'nullable|string' // ? optional
]); 


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

$photoFile = $request->file('photoFile');
$photoOriginalName = $photoFile->getClientOriginalName();
$photoFileName = time() . '_' . $photoOriginalName;
$photoFile->storeAs('public/store_photos', $photoFileName);

// Handle permit photo
$permitPhoto = $request->file('permitPhoto');
$permitOriginalName = $permitPhoto->getClientOriginalName();
$permitPhotoName = time() . '_' . $permitOriginalName;
$permitPhoto->storeAs('public/permit_photos', $permitPhotoName);

        DB::table('registrations')->insert([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,
           'photoFile'     => $photoFileName,       // Save original name with timestamp
    'permitPhoto'   => $permitPhotoName,     // Save original name with timestamp
            'message' => $request->message,
            'created_at' => now(),
        ]);

        return response()->json(['message' => 'Registration saved successfully.']);
    }
} 

