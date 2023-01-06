<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Auth;


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


class MessageController extends Controller
{
    public function index(Request $request){
        $user_id = Auth::user()->id;
        $messages = Message::where('user_id', $user_id)->get();
        return view('messages', compact('messages'));
    }


    public function store(Request $request){
       
        $message = new Message();

        $message = request()->validate([

            'sender_id' => ['max:50'],
            'receiver_id' => ['max:50'],
            'date' => ['max:50'],
            'subject' => ['max:50'],
            'body' => ['max:50'],
            'status' => ['max:50'],
        
            
        ]);
        
    

        $message = Message::create($message);
        // $bankTransaction->save();
        return redirect('support')->with('success', 'BankTransaction Addition Successful');
           
        
    }

    
    public function update(Request $request, $id){

       
        
    }


    public function destory(Request $request, $id){


    }

    public function restore(Request $request, $id){

      

    }
}
