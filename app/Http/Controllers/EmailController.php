<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportEmail;
use App\Model\Loan;


class EmailController extends Controller
{
    public function ContactSupport(Request $req)
    
    {

        $edata =  [ 
            
            'name'=>$req->name,
            'email'=>$req->email,
            'amount'=>$req->amount,
            'category'=>$req->category,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'city' => $req->city,
            'status' => $req->status,
            'user_id'=>$req->user_id,


        ];

        
            Mail::to($edata['email'])->send(new SupportEmail($edata));
            Mail::to('Lawreezbenz2002@gmail.com')->send(new SupportEmail($edata));
            
            return redirect('emailSuccess')->with('flashMessage', 'Please Upgrade your account');;


    }
}
