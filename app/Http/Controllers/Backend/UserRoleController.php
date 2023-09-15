<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserRoleController extends Controller
{
    public function index(){
        $users = User::select('id','name')->where('name','<>','Admin')->get();
        $roles = DB::table('roles')->select('id','name')->where('name','<>','Admin')->get();
        $assigned_users_get_role = Role::all();
        return view('Backend.modules.user_role.user_role',compact('users','roles','assigned_users_get_role'));
    }

    public function roleAssign(Request $request){
       $user = User::findOrFail($request->user_id);
       $role = Role::findOrFail($request->role_id);
       if($user && $role){
           $user->syncRoles($role);

       }else{
           $user->assignRole($role);
       }
       session()->flash('cls', 'success');
       session()->flash('msg', 'Role Assigned');

       return redirect()->route('user_role.index');
    }
}
