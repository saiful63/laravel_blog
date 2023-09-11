<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MultiAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
             'name'=>'Admin',
             'email'=>'admin@gmail.com',
             'password'=>bcrypt('password')

            ],
            [
             'name'=>'General user',
             'email'=>'general@gmail.com',
             'password'=>bcrypt('password')

            ],
            [
             'name'=>'Observer',
             'email'=>'observer@gmail.com',
             'password'=>bcrypt('password')

            ],
            [
             'name'=>'Editor',
             'email'=>'editor@gmail.com',
             'password'=>bcrypt('password')

            ]


        ];
        foreach($users as $user){
            User::create([
                'name'=>$user['name'],
                'email'=>$user['email'],
                'password'=>$user['password']
            ]);
        }


        $roles=[
            [
             'name'=>'Admin'

            ],
            [
             'name'=>'General user'

            ],
            [
             'name'=>'Observer'

            ],
            [
             'name'=>'Editor'

            ]


        ];
        foreach($roles as $role){
            Role::create([
                'name'=>$role['name']
            ]);
        }

        $permissions=['create post','edit post','delete post','show post','create category','edit category','delete category','create sub_category','edit sub_category','delete sub_category','create tag','edit tag','delete tag'];
        foreach($permissions as $permission){
            Permission::create([
                'name'=>$permission,
            ]);
        }



        $user = User::select('id','name')->where('name','Admin')->first();
        $user->assignRole('Admin');
        $admin_role = Role::findByName('Admin');
        $admin_role->syncPermissions(Permission::all());

        $user = User::select('id','name')->where('name','General user')->first();
        $user->assignRole('General user');
        $general_user_role = Role::findByName('General user');
        $general_user_role->syncPermissions(['create post','edit post','delete post']);

        $user = User::select('id','name')->where('name','Observer')->first();
        $user->assignRole('Observer');
        $observer_role = Role::findByName('Observer');
        $observer_role->syncPermissions('show post');


        $user = User::select('id','name')->where('name','Editor')->first();
        $user->assignRole('Editor');
        $editor_role = Role::findByName('Editor');
        $editor_role->syncPermissions(['edit post','show post']);




    }
}
