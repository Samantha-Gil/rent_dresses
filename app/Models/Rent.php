<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'dress_id',
        'amount',
        'start_date',
        'end_date'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function dress()
    {
        return $this->belongsTo(Dress::class);
    }
}
