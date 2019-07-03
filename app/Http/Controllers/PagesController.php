<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Store;

class PagesController extends Controller
{

    public function getProfilePage()
    {
        $user = Auth::user();
        $storeInformation = Store::where('userId', $user->id)->first();
        return view('profilePage')->with('user', $user)->with('storeInformation', $storeInformation);
    }

}
