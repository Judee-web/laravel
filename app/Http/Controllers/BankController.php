<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use Auth;


class BankController extends Controller
{
    public function index(Request $request){
       
        $banks = Bank::all();
        return view('banks', compact('banks'));
    }


    public function store(Request $request){
       
        $bank = new Bank();

        $bank = request()->validate([
            'name' => ['required', 'max:50'],
            

            
        ]);
         
        $bank = Bank::create($bank);
        // $bank->save();
        return back()->withInput()->with('success', 'Bank Addition Successful');
           
        
    }

    
    public function update(Request $request, $id){

       
        
    }


    public function destory(Request $request, $id){


    }

    public function restore(Request $request, $id){

      

    }
}
