<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
class Admin extends Controller
{
    public function admin(){
        if(Session::has('Admin_id')){

            return redirect(route('dashboard'));
        }
        else{
            return view('admin.login');
        }
    }
    public function dashboard(){
        if(Session::has('Admin_id')){
            $exps = Experience::all();
            $skills = Skill::all();
            $projects = project::all();
            return view("admin.Dashboard" ,compact('exps', 'skills', 'projects'));
        }
        else{
            return redirect("/admin");
        }
    }
    public function login(Request $request){

        if($request->email == "fadygamilha@gmail.com"){
            if($request->password == "Mindfuck2@"){
                Session::put('Admin_id' , "1");
                return redirect('/admin');
            }
        else{
            return back()->with('fail' , 'Email or Password are wrong');
        }

        }

    }
}
