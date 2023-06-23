<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\PseudoTypes\True_;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::all();
        return view('dashboard',['registers'=>$registers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('launch',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $register = new Register;
        $register->user_id = Auth::user()->id;
        $register->value = $request->value;
        $register->category_id = $request->category;
        $register->type = $request->type;
        if ($request->attribute){
            $date = $request->date;
            for($i = 1; $i <= 12; $i ++){
                $register = new Register;
                
                $register->value = $request->value;
                $register->category_id = $request->category;
                $register->attribute = $request->attribute;
                $register->type = $request->type;
                $date = Carbon::parse($date)->addDays(30);
                $register->date =  $date;
                $register->save();
            }
        } else{
            $register->attribute = false;
            $register->date = $request->date;
            $register->save();
        }
        return redirect('/registers/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}

