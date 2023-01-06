<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;



class Loan extends Model
{
   
    use HasFactory;
    // use HasProfilePhoto;
    // use HasRoles;
    use Notifiable;
    use SoftDeletes;
    // use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'name',
        'email',
        'category',
        'amount',
        'phone',
        'address',
        'Reason',
        'Identity',
        'Income',
        'loanReason',
        'companyName',
        'companyNo',
        'loanDuration',
        'employmentStatus',
        'bank',
        'bankStatement',
        'occupation',
        'monthlyAllowance',
        'city',
        'user_id',
        'status',
    ];

}
