<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function login($id)
    {
        return view('auth.login');
    }

    public function register($id)
    {
        return view('auth.register');
    }
}