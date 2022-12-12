<?php

namespace App\Http\Controllers;

use App\Models\probleme;
use App\Models\medication;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\solution;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProblemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problems= probleme::all();
        return view('Admin.show_problems',compact('problems'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medications=medication::all();
        $Categories=DB::table('categories')->get();
        DB::table('problemes')->insert([
            'probleme'=>$request->problem,
            'user_id'=>Auth::id()
        ]);
        return view('HomePage', [App\Http\Controllers\MedicationController::class, 'index'])->with([
            'medications' => $medications,
            'categories'=> $Categories,
            'statues'=>'add'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\probleme  $probleme
     * @return \Illuminate\Http\Response
     */
    public function show(probleme $probleme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\probleme  $probleme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Admin.solution',compact('id'));
    }

    public function update(Request $request,$id)
    {
        $u=DB::table('problemes')->where('id',$id)->first();
        $users=User::where('id',$u->user_id)->get();
        Notification::send($users,new solution($request->solution,$u->probleme));
        DB::table('problemes')->where('id',$id)->delete();
        return redirect()->route('problem.index'); 
    }

    public function delete_notification($id){
        DB::table('notifications')->where('id',$id)->delete();
        return back();
    }
    public function destroy($id)
    {
        DB::table('problemes')->where('id',$id)->delete();
        return back();
    }
}
