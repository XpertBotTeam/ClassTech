<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Semester;
use App\Models\Course;
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

    public function viewSemesters(){
        return view('admin.addSemester');
    }

    public function viewCourses(){
        $semester = Semester::all();
        return view('admin.addCourses',compact('semester'));
    }

    public function createCourses(Request $request){
        $request->validate([
            'coursename'=>'required',
            'coursecode'=>'required',
            'semester_id'=>'required',]);
            $courses = Course::create([
                'coursename'=>$request['coursename'],
                'coursecode'=>$request['coursecode'],
                'semester_id'=>$request['semester_id'],
            ]);

            return view('admin.dashboard');
    }
    public function createSemester(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $semester = Semester::create([
            'name' => $request['name']
        ]);

        return view('admin.dashboard');
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
