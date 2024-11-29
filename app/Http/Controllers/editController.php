<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('id'); // Get the 'id' from the query string
        $info = DB::table('information')->where('id', $id)->first(); // Retrieve the record by ID

        // Check if the information exists, if not, redirect with an error message
        if (!$info) {
            return redirect()->route('dashboard')->with('error', 'Profile not found.');
        }

        // Pass the fetched data to the view
        return view('edit', ['information' => $info]);
    }

    public function saveProfile(Request $request)
    {
        // Get all input data from the form
        $data = $request->except('_token'); // Exclude CSRF token

        // Validation (you can add your validation rules here)
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'description' => 'required|string',
            'schoolName' => 'nullable|string',
            'schoolDate1' => 'nullable|string',
            'skills' => 'nullable|string',
            'interest' => 'nullable|string',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        // Check if there's a profile image and handle file upload
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            // Store the uploaded file in the 'profiles' folder within the 'public' disk
            $profilePath = $profile->store('profiles', 'public');
            // Add the file path to the data array
            $data['profile'] = $profilePath;
        }

        // Update the record in the database
        DB::table('information')->where('id', $request->input('id'))->update($data);

        // Return the updated data to the frontend (for redirection)
        return response()->json(['id' => $request->input('id')]);
    }
}
