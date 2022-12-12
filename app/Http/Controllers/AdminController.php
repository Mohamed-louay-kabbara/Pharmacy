<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\medication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index($id)
    {
        if(view()->exists($id)){
            return view($id);
        }
        else
        {return view('404');}
    }

    public function dashboard()
    {
        if(auth()->user()->is_admin==false){
        $categories=DB::table('categories')->get();
        $statues="";
        $medications=medication::all();
        return view('HomePage',compact('categories','medications','statues'));
        }
        if(auth()->user()->is_admin==true){
            $users=DB::table('users')->count()-1;
            $orders=DB::table('buys')->count();
            $medications=DB::table('medications')->count();
            $categories=DB::table('categories')->count();
            return view('dashboard',compact('users','orders','medications','categories'));
        }
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $users=DB::table('users')->where('id',$id)->first();
        return view('editproflie',compact('users'));
    }

    public function update(Request $request, $id)
    {
        $pass=User::findorfail($id);
        if($pass->password==$request->password){
        $password1=$request->password;
        }
        else{
         $password1=Hash::make($request->password);
         }
         DB::table('users')->where('id', $id)->update([
             'name' => $request->name,
             'email' => $request->email,
             'phone'=>$request->phone,
             'address'=>$request->address,
             'password'=>$password1,
         ]);
         return redirect()->route('dashboard');
    }

    public function destroy($id)
    {

    }
}
