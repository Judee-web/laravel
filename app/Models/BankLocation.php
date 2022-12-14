<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankLocation extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'number',
        'available_balance',
        'ledger_balance',
        'user_id',
        'bank_location_id',
    ];

    public function currency()
    {
        return $this->hasOne('App\Models\Currency','id','currency_id');
    }

    public function bank()
    {
        return $this->hasOne('App\Models\Bank','id','bank_id');
    }

}
