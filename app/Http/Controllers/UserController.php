<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function allUsers()
    {
        $users = 
            User::select([
                    'users.id', 
                    'users.name', 
                    'email', 
                    'role_id', 
                    'roles.name as role_name'
                ])
                ->join('roles', 'users.role_id', '=', 'roles.id')
                ->get();
        return view('user.index', compact('users'));
    }
}
