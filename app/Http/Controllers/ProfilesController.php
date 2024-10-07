<?php

namespace App\Http\Controllers;
use App\Models\Profiles;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function getAllProfiles(){
        $profiles = Profiles::all();
        return view('profiles', ['profiles'=> $profiles]);
    }

    public function getProfile(Request $request){
        $profile = Profiles::find($request->id);

        return view('profile', ['profile'=>$profile]);
    }
}
