<?php

namespace App\Http\Controllers;
use App\Models\Loan;
use Auth;


use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(Request $request){
        $user_id = Auth::user()->id;
        $Loans = Loan::where('user_id', $user_id)->get();
        return view('loans', compact('Loans'));
    }


    public function store(Request $request){
       
        $Loan = new Loan();

        $Loan = request()->validate([
            'name' => ['max:50'],
            'email' => ['max:50'],
            'user_id' => ['required', 'max:50'],
            'amount' => ['required', 'max:50'],
            'category' => ['max:50'],
            'phone' => ['max:50'],
            'address' => ['max:50'],
            'city' => ['required', 'max:50'],
            'status'=> ['max:50'],
           
        ]);
  
        $Loan = Loan::create($Loan);
        // $bankTransaction->save();
        return redirect('loanResult')->with('success', 'Loan Application Success');
           
        
    }

    
    public function update(Request $request, $id){

       
        
    }


    public function destory(Request $request, $id){


    }

    public function restore(Request $request, $id){

      

    }
}
