<?php

namespace App\Http\Controllers;

use App\Models\medication;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    public function index()
    {
        $medications=medication::all();
        return view('Admin.showmedications',compact('medications'));
    }
   public function search_medication($id)
   {
    $Categories= DB::table('Categories')->get();
        $filter = medication::where('category_id',$id)->get();
        if ($filter->count()) {
            return view('HomePage', [App\Http\Controllers\MedicationController::class, 'index'])->with([
                'medications' => $filter,
                'categories'=> $Categories,
                'statues'=>'found'
            ]);
        }
        else{return view('HomePage', [App\Http\Controllers\MedicationController::class, 'index'])->with([
            'medications' => $filter,
            'categories'=> $Categories,
            'statues'=>'not found',
            
        ]);;
    }
   }
   public function search_name_medication(Request $request)
   {
    $Categories= DB::table('Categories')->get();
        $filter = medication::where('name','like', '%' . $request->name_medication . '%')->get();
        if ($filter->count()) {
            return view('HomePage', [App\Http\Controllers\MedicationController::class, 'index'])->with([
                'medications' => $filter,
                'categories'=> $Categories,
                'statues'=>'found'
            ]);
        }
        else{return view('HomePage', [App\Http\Controllers\MedicationController::class, 'index'])->with([
            'medications' => $filter,
            'categories'=> $Categories,
            'statues'=>'not found',
            
        ]);;
    }
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories= DB::table('Categories')->get();
        return view('Admin.addmedication',compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('picture')->getClientOriginalName();
        $path= $request->file('picture')->storeAs('Medication',$image,'imges');
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'information' => 'required',
            'price' => 'required',
            'count'=>'required',
            'picture'=>'required',
            'production_date'=>'required',
            'medical_prescription'=>'required',
        ]);
            DB::table('medications')->insert([
                'name'=>$request->name,
                'company'=>$request->company,
                'information'=>$request->information,
                'picture'=>$path,
                'price'=>$request->price,
                'count'=>$request->count,
                'medical_prescription'=>$request->medical_prescription,
                'production_date'=>$request->production_date,
                'category_id'=>$request->cotigory_id]);
            return redirect()->route('Medication.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('Admin.addmedication');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Categories= DB::table('Categories')->get();
        $medication=medication::where('id',$id)->first();
        return view('Admin.editmedication',compact('medication','Categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            DB::table('medications')->where('id',$id)->update([
                'name'=>$request->name,
                'company'=>$request->company,
                'information'=>$request->information,
                'price'=>$request->price,
                'count'=>$request->count,
                'medical_prescription'=>$request->medical_prescription,
                'production_date'=>$request->production_date,
                'category_id'=>$request->cotigory_id]);
            return redirect()->route('Medication.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('medications')->where('id',$id)->delete();
        return back();
    }
}
