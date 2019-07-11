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

    public function updateProfilePicture($picture)
    {
    	$user = Auth::user();
    	$storeInformation = Store::find($user->id)->update($picture);

/*    	  DB::table('users')
      ->where('id', $id)
      ->update($data);*/


    }
    

 /*    public function getProfilePage(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }*/

/*    public function update(User $user)
    { 
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();
    }
    */

    public function updateProfileInformation(Request $request)
    {
        


        $this->validate($request, [
            'shopName' => 'required',
            'shopDescription' => 'required',
            'shopPhone' => 'required',
            'shopMail' => 'required',
            'shopAddress' => 'required',
            'shopZipcode' => 'required',
            'shopCity' => 'required',
        ]);

        $user = Auth::user();
        $store = Store::find($user->id);
/*
        $store->name = request('name');
        $store->description = request('description');
        $store->phone = request('phone');
        $store->mail = request('mail');
        $store->address = request('address');
        $store->zipcode = request('zipcode');
        $store->city = request('city');
        $store->website = request('website');*/


        $store->name = $request->get('shopName');
        $store->description = $request->get('shopDescription');
        $store->phone = $request->get('shopPhone');
        $store->mail = $request->get('shopMail');
        $store->address = $request->get('shopAddress');
        $store->zipcode = $request->get('shopZipcode');
        $store->city = $request->get('shopCity');
        $store->website = $request->get('shopWebsite');

        $store->save();

        return back();

        return redirect()->route('/profilePage')->with('success', 'data updated');



    }

}
