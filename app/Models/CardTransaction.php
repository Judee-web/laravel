<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardTransaction extends Model
{
    //
    protected $fillable = [
        'name',
        'transaction_code',
        'narration',
        'amount',
        'type',
        'status',
        'user_id',
    ];

    public function card()
    {
        return $this->hasOne('App\Models\Card','id','card_id');
    }

}
