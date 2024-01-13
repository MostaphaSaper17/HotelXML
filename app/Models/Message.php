<?php

namespace App\Models;

use App\Models\SupportTicket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function ticket()
    {
        return $this->belongsTo(SupportTicket::class);
    }
}
