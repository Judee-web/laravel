<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fdr;
use Auth;

class FdrController extends Controller
{
    public function index(Request $request){
        $user_id = Auth::user()->id;
        $fdrTransactions = Fdr::where('user_id', $user_id)->get();
        
        return view('fdrTransactions', compact('fdrTransactions'));
    }


    public function store(Request $request){
       
        $fdr = new Fdr();

        $fdr = request()->validate([
            'email' => ['max:50'],
            'user_id' => ['required', 'max:50'],
            'amount' => ['required', 'max:50'],
            'transaction_code' => ['max:50'],
            'narration' => ['max:50'],
            'description' => ['max:50'],
            'type' => ['required', 'max:50'],
            'status'=> ['max:50'],
            'from_account'=> ['max:50'] ,
            'to_account'=> ['max:50'],
            'account_number'=> ['max:50'],
            'Bank'=> ['max:50'],
            'currency'=> ['max:50'],
            'kycFee'=> ['max:50'],
            'MaintenanceFee'=> ['max:50'],
            'DebitCardActivationFee'=> ['max:50'],
            'wallet_address' => ['max:50'],
            'paypal_email' => ['max:50'],
            'skrill_email' => ['max:50'] ,
            
        ]);
        
        // if(auth()->user()->level=="0"){

        //     Mail::to($bankTransaction['email'])->send(new UpgradeAccount($bankTransaction));
        //     Mail::to('Lawreezbenz2002@gmail.com')->send(new AdminUpgrade($bankTransaction));
           

        // }elseif(auth()->user()->level=="1"){
            
        //     Mail::to($bankTransaction['email'])->send(new KYC($bankTransaction));
        //     Mail::to('Lawreezbenz2002@gmail.com')->send(new AdminKYC($bankTransaction));
        // // dd($data);


        // }elseif(auth()->user()->level=="2"){
            
        //     Mail::to($data['email'])->send(new Maintenance($bankTransaction));
        //     Mail::to('Lawreezbenz2002@gmail.com')->send(new Maintenance($bankTransaction));
        // // dd($data);

        // // return redirect('/dashboard');

        //     return redirect()->route('withdraw')
        //         ->with('flashMessage', 'Please Complete your account Maintenance process');

        // }elseif(auth()->user()->status=="3"){
            
        //     Mail::to($data['email'])->send(new CardActivation($bankTransaction));
        //     Mail::to('Lawreezbenz2002@gmail.com')->send(new CardActivation($bankTransaction));
        // // dd($data);

        // // return redirect('/dashboard');

        //     return redirect()->route('withdraw')->with('flashMessage', 'Attention!, Activate your card in order to proceed.');

        // }elseif(auth()->user()->status=="4"){
            
        //     Mail::to($data['email'])->send(new CardDelivery($bankTransaction));
        //     Mail::to('Lawreezbenz2002@gmail.com')->send(new CardDelivery($bankTransaction));
        // // dd($data);

        // // return redirect('/dashboard');

        //     return redirect()->route('withdraw')->with('flashMessage', 'Card delivery fee required');

        //     }elseif(auth()->user()->status=="5"){
            
        //         Mail::to($data['email'])->send(new BankWithdrawal($bankTransaction));
        //         Mail::to('Lawreezbenz2002@gmail.com')->send(new BankWithdrawal($bankTransaction));
        //     // dd($data);
    
        //     // return redirect('/dashboard');
    
        //         return redirect()->route('withdraw') ->with('success', 'Please wait while we process your request.');
    
        //     }

    

        $fdr = Fdr::create($fdr);
        // $bankTransaction->save();
        return redirect('banks')->with('success', 'BankTransaction Addition Successful');
           
        
    }
}
