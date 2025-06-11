<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($name = null)
    {
        // You can fetch data here if it were from a database
        // For now, we'll pass static data or infer from the URL
        $profileData = [
            'name' => $name ? str_replace('-', ' ', ucwords($name)) : 'Luqman Hadi', // Default or from URL
            'linkedinUrl' => 'https://www.linkedin.com/in/luqmanhadi/', // Replace with actual
            'imageUrl' => asset('images/luqman-hadi.jpg'), // Ensure this image exists in public/images
        ];

        return view('profile', compact('profileData'));
    }
}