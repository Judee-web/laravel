<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    //

    use SoftDeletes;

    protected $fillable = [
        'card_type_id',
        'currency_id',
        'available_balance',
        'ledger_balance',
        'name',
        'number',
        'month',
        'year',
        'cvv',
        'billing_address',
        'zip_code',
        'status',
        'user_id',
        'code',
    ];

    public function currency()
    {
        return $this->hasOne('App\Models\Currency','id','currency_id');
    }

    public function card_type()
    {
        return $this->hasOne('App\Models\CardType','id','card_type_id');
    }


    public function getFormatedNumberAttribute(){

        $number = str_split($this->number, 4);
        $formatedNumber = "";

        $cardNumberCount = count($number);

        for($i=0; $i<$cardNumberCount; $i++){

            if(($i+1) < $cardNumberCount){
                $formatedNumber .= $number[$i]."&nbsp;&nbsp;&nbsp;";
            }else{
                $formatedNumber .= $number[$i];
            }

        }

        return $formatedNumber;
    }

}
