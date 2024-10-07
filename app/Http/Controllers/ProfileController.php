<?php

namespace App\Http\Controllers;
use App\Models\Profiles;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile(Request $request){
        $profile = Profiles::find($request->id);

        return view('profile', ['profile'=>$profile]);
    }
}