<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GusetName extends Model
{
    use HasFactory;
    
    protected $guarded =[];

    public function manual_booking()
    {
        return $this->belongsTo(ManualBooking::class);
    }
}
