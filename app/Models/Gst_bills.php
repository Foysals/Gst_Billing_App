<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gst_bills extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_date',
        'invoice_no',
        'item_description',
        'total_amount',
        'total_amount_usd',
        'cgst_rate',
        'sgst_rate',
        'igst_rate',
        'cgst_amount',
        'tax_amount',
        'igst_amount',
        'sgst_amount',
        'net_amount',
        'declaration',
        'is_deleted'
    ];
}
