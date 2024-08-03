<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class experienceController extends Controller
{
    public function edit($id){
        $exp = Experience::find($id);
        return view('admin.Editexp' , compact('exp'));
    }

    public function update(Request $request , $id){

        $exp = Experience::find($id);

        $exp->startYear = $request->startYear;
        $exp->endYear = $request->endYear;
        $exp->position = $request->position;
        $exp->organization = $request->organization;
        $exp->description = $request->description;
        $res = $exp->save();

        if($res){
            return redirect('/admin/dashboard');
        }
        else{
            return back()->with('fail' , 'something went wrong!');
        }
    }

    public function delete($id){
        $exp = Experience::find($id);
        $exp->delete();
        return redirect('/admin/dashboard');
    }
}
