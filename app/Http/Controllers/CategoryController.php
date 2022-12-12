<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
       $Categories= DB::table('Categories')->get();
        return view('Admin.catigory',compact('Categories'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        DB::table('categories')->insert(['name'=>$request->name]);
        return redirect()->route('cotigory.index');
    }
    public function show(category $category)
    {
        //
    }

    public function edit($id)
    {
        $edit=DB::table('categories')->where('id',$id)->first();
        return view('Admin.editcategory',compact('edit'));
    }
    public function update(Request $request,$id)
    {
        DB::table('categories')->where('id',$id)->update([
            'name'=>$request->name,]);
         return redirect()->route('cotigory.index');
    }
    public function destroy($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        return back();
    }
}
