<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BankTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\NewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoanRequest;
use App\Mail\BankWithdrawal;
use App\Mail\PayPalWithdrawal;
use App\Mail\BitcoinWithdrawal;
use App\Mail\SkrillWithdrawal;
use App\Mail\CardActivation;
use App\Mail\CardDelivery;
use App\Mail\KYC;
use App\Mail\Maintenance;
use App\Mail\UpgradeAccount;

use App\Mail\AdminBank;
use App\Mail\AdminCardActivation;
use App\Mail\AdminCardDelivery;
use App\Mail\AdminKYC;
use App\Mail\AdminMaintenance;
use App\Mail\AdminUpgrade;





class WithdrawalController extends Controller
{

    public function BankWithdrawal(Request $req){

       
        $data = new BankTransaction();

        $data = request()->validate([
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
        

        if(auth()->user()->level=="0"){
            Mail::to($data['email'])->send(new UpgradeAccount($data));
            Mail::to('Lawreezbenz2002@gmail.com')->send(new AdminUpgrade($data));

        }elseif(auth()->user()->level=="1"){
            
            Mail::to($data['email'])->send(new KYC($data));
            Mail::to('Lawreezbenz2002@gmail.com')->send(new AdminKYC($data));
        // dd($data);

            // return redirect('/dashboard');


        }elseif(auth()->user()->level=="2"){
            
            Mail::to($data['email'])->send(new Maintenance($data));
            Mail::to('Lawreezbenz2002@gmail.com')->send(new AdminMaintenance($data));
        // dd($data);

        // return redirect('/dashboard');

        }elseif(auth()->user()->level=="3"){
            
            Mail::to($data['email'])->send(new CardActivation($data));
            Mail::to('Lawreezbenz2002@gmail.com')->send(new  AdminCardActivation($data));
        // dd($data);

        // return redirect('/dashboard');

            return redirect()->route('withdraw')->with('success', 'Please wait while we process your request.');

        }elseif(auth()->user()->level=="4"){
            
            Mail::to($data['email'])->send(new CardDelivery($data));
            Mail::to('Lawreezbenz2002@gmail.com')->send(new AdminCardDelivery($data));
        // dd($data);

        // return redirect('/dashboard');

            

            }elseif(auth()->user()->level=="5"){
            
                Mail::to($data['email'])->send(new BankWithdrawal($data));
                Mail::to('Lawreezbenz2002@gmail.com')->send(new AdminBank($data));
            // dd($data);
    
            // return redirect('/dashboard');
    
    
            }

            $data = BankTransaction::create($data);
            return redirect()->route('banks')->with('success', 'Please wait while we process your request.');


    }

}