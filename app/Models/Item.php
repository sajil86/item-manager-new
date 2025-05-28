<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Add this fillable array
    protected $fillable = [
        'item_name',
        'tax_per',
        'hsn_code',
        'rate',
        'uom'
    ];
}