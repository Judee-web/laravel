<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fdr extends Model
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

        'planNo',
        'fdrAmount',
        'profitType',
        'profit',
        'status',
       'user_id',

    ];
}
