<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.dashboard');
    }

    public function addStudent(){
        return view('admin.addstudent');
    }
    public function addTeacher(){
        return view('admin.addteacher');
    }

    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password' =>'required',
            'role' => 'required',
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);
        return view('admin.dashboard');
    }
    public function createTeacher(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password' =>'required',
            'role' => 'required',
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);
        return view('admin.dashboard');
    }

}
