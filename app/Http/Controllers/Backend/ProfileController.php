<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Upazila;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
         $user = User::where('id',Auth::user()->id)->first();
         $divisions = Division::all();
         return view('Backend.modules.profile.index',compact('user','divisions'));
    }

    public function sentDivisionData(Request $request){

        return $districts = District::select('id','division_id','name')->where('division_id',$request->division_id)->get();
    }

    public function sentDistrictData(Request $request){

        return $upazila = Upazila::select('id','district_id','name')->where('district_id',$request->district_id)->get();
    }

    public function updateProfile(Request $request){


        $user = User::where('id',Auth::user()->id);
        $user_data = [
            'name'=>$request->name,
            'email'=>$request->email
        ];
        if($request->hasFile('photo')){
          $old_photo_path = public_path('image/profile/'.$request->photo_invisible);
          unlink($old_photo_path);
          $photo = $request->file('photo');
          $photo_destination = public_path().'/image/profile/';
          $request->file('photo')->move($photo_destination,$photo->getClientOriginalName());
          $user_data['photo'] = $photo->getClientOriginalName();
        }
        if($request->division){
            $user_data['division'] = $request->division;
        }
        if($request->district){
            $user_data['district'] = $request->district;
        }
        if($request->upazila){
            $user_data['upazila'] = $request->upazila;
        }

        if($request->password){
            $user_data['password'] = Hash::make($request->password);
        }
        $user_data_updated = $user->update($user_data);
        if($user_data_updated){
            session()->flash('cls', 'success');
            session()->flash('msg', 'Profile updated');
            return redirect()->route('profile.index');
        }


    }
}
