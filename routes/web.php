<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin;
use App\Http\Controllers\skillController;
use App\Http\Controllers\experienceController;


Route::get('/', function () {
    $exps = Experience::all();
    $skills = Skill::all();
    return view('home', compact('skills' , 'exps'));
});
Route::get('/addskillp' , function(){
    return view('addskill');
});
Route::get('/addexpp' , function(){
    return view('admin.addexp');
});
Route::post('/addskill' , function(Request $request){
    $skill = new Skill();

    $skill->name = $request->name;
    $skill->track = $request->track;
    $skill->level = $request->level;

    $res = $skill->save();
    if($res){
        return back()->with('sucsess' , 'Added!');
    }
    else{
        return back()->with('sucsess' , 'Added!');
    }
})->name('addskill');

Route::post('/addexp' , function(Request $request){
    $exp = new Experience();

    $exp->startYear = $request->startYear;
    $exp->endYear = $request->endYear;
    $exp->position = $request->position;
    $exp->organization = $request->organization;
    $exp->description = $request->description;

    $res = $exp->save();
    if($res){
        return back()->with('sucsess' , 'Added!');
    }
    else{
        return back()->with('sucsess' , 'Added!');
    }
})->name('addexp');

Route::get('/admin' ,[Admin::class , 'admin'] );
Route::post('/admin/login' ,[Admin::class , 'login'] )->name('login');
Route::get('/admin/dashboard' ,[Admin::class , 'dashboard'] )->name('dashboard');

Route::get('/admin/edit/{id}', [experienceController::class , 'edit']);
Route::put('/admin/update/{id}', [experienceController::class , 'update']);
Route::delete('/admin/delete/{id}', [experienceController::class , 'delete']);
