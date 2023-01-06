<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankTransaction extends Model
{
    //

    protected $fillable = [
        'amount',
        'transaction_code', 
        'narration',
        'description',
        'type',
        'user_id',
        'status',
        'from_account',
        'to_account',
        'account_number',
        'Bank' ,
        'currency',
        'kycFee',
        'MaintenanceFee',
        'CardActivationFee',
        'wallet_address',
        'paypal_email',
        'skrill_email',

    ];


}
