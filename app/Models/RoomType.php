<?php

namespace App\Models;

use App\Models\ManualBooking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function manual_booking()
    {
        return $this->belongsTo(ManualBooking::class);
    }
}
