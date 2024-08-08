<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partie extends Model
{
    use HasFactory;

    protected $fillable = [
        'party_type',
        'full_name',
        'branch_address',
        'ifsc_code',
        'bank_name',
        'account_no',
        'account_holder_name',
        'address',
        'phone_no'
    ];
}
