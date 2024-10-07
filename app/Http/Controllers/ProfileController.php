<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
 public function profile(){
   $info = profile::all();
          return view('profile-side.profile', compact('info'));
 }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

 public function update(Request $request, $ID)
{

    $request->validate([
        'Fname' => 'required',
        'Lname' => 'required',
        'Email' => 'required|email',
        'Phone' => 'required',
        'Password',
        'Image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 
    ]);


    $profile = Profile::findOrFail($ID);


    if ($request->hasFile('Image')) {
        $image = $request->file('Image');
        $filename =  $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
        $profile->Image = 'images/' . $filename;
    }

    
    $profile->Fname = $request->Fname;
    $profile->Lname = $request->Lname;
    $profile->Email = $request->Email;
    $profile->Phone = $request->Phone;
    $profile->Password =$request->Password; 
    $profile->save();

    return redirect()->back();
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
