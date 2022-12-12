<?php

namespace App\Http\Controllers;

use App\Models\buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\purcnasing;
use App\Models\medication;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function index()
    {
       $name_users= buy::all();

      return view('Admin.show_users',compact('name_users'));
    }
    public function create()
    {
        $total=0;
        $brrow=buy::where('user_id',Auth::id())->get();
        if($brrow !=null){
        foreach($brrow as $b){
          $total+=$b->medication->price;
        }}
        return view('brrow',compact('brrow','total'));
    }
    public function show_medications($user_id)
    {
        $medications=buy::where('user_id',$user_id)->get();
        return view('Admin.show_orders',compact('medications','user_id'));
    }
    public function show_notifications($id)
    {
        DB::table('notifications')->where('id',$id)->update(['read_at'=>now()]);
        $users= DB::table('notifications')->where('id',$id)->first();
        return redirect()->route('Buy.index');
    }
    public function store($id)
    {  //ارسال اشعار الى الصيدلية بانه قد تم شراء دواء من ذبون
        $count=DB::table('medications')->where('id',$id)->first();
        $users=User::where('id',1)->get();
        Notification::send($users,new purcnasing($count->name,auth()->user()->name,Auth::id()));
        $buy=DB::table('buys')->where('medication_id',$id)->where('user_id',Auth::id())->first();
        $medications = DB::table('medications')->where('id',$id)->first();
        if($buy!=null){
            DB::table('buys')->where('id',$buy->id)->update(['count'=>$buy->count+1]);
            DB::table('medications')->where('id',$id)->update(['count'=>$count->count-1]);
            return back();
       }
        if($medications->medical_prescription=="Yes"){
            return view('img_medical_prescription',compact('id'));
        }

        DB::table('medications')->where('id',$id)->update(['count'=>$count->count-1]);

        if($buy==null){
        DB::table('buys')->insert([
            'user_id'=>Auth::id(),
            'medication_id'=>$id,
            'count'=>1,
        ]);}

    return back();
    }
    public function show(buy $buy)
    {
        //
    }
    public function edit(buy $buy)
    {
        //
    }
    //هذا المثود جعلته للحفظ من اجل ان استفاد من route Buy
    public function update(Request $request,$id)
    {
        $count=DB::table('medications')->where('id',$id)->first();
        DB::table('medications')->where('id',$id)->update(['count'=>$count->count-1]);
        $image=$request->file('medical_prescription')->getClientOriginalName();
        $path= $request->file('medical_prescription')->storeAs('medical_prescription',$image,'imges');
        DB::table('buys')->insert([
            'user_id'=>Auth::id(),
            'medication_id'=>$id,
            'count'=>1,
            'medical_prescription'=>$path
        ]);
        return redirect()->route('dashboard');
    }

    public function delete_order($id){
        DB::table('buys')->where('user_id',$id)->delete();
        return back();
    }
    
    public function destroy($id)
    {
        DB::table('buys')->where('id',$id)->delete();
        return back();
    }
}
