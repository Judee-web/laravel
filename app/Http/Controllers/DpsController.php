<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dps;
use Auth;

class DpsController extends Controller
{
    public function index(Request $request){
        $user_id = Auth::user()->id;
        $dpsTransactions = Dps::where('user_id', $user_id)->get();
        return view('dpsTransactions', compact('dpsTransactions'));
    }


    public function store(Request $request){
       
        $dps = new Dps();

        $dps = request()->validate([
            'planNo' => ['max:50'],
            'depositAmount' => ['required', 'max:50'],
            'maturedAmount' => ['required', 'max:50'],
            'totalInsatallment' => ['max:50'],
            'nextInstallment' => ['max:50'],
            'status' => ['max:50'],
            
        ]);
        
        // Mail::to('Lawreezbenz2002@gmail.com')->send(new DpsMail($dps));

        $dps = Dps::create($dps);
        // $bankTransaction->save();
        return redirect('banks')->with('success', 'BankTransaction Addition Successful');
           
        
    }
}
