<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    //show all medicines
    public function index(){

        $medicines = DB::table('medicines')->get();

        return view('medicine.medicines', ['medicines' => $medicines]);
    }


    //show the add medicine form

    public function create(){
    
        return view('admin.medicine.addmedicine');
    }

    //show a specific medicine
    public function show($id){
        $medicine = DB::table('medicines')->where('med_id', $id)->first();
        return view('medicine.medicine', ['medicine' => $medicine]);
    }

    //show all medicine (admin panel)
    public function adminIndex(){
        $medicines = DB::table('medicines')->get();

        return view('admin.medicine.medicines', ['medicines' => $medicines]);
    }

   
}
