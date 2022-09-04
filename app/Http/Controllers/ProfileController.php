<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function upload(ProfileRequest $profileRequest, Request $request){
        $request->file('photo')->store('profiles');
    
        return redirect('profile');
    }
}
