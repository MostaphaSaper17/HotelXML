<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupportTicket extends Model
{
    use HasFactory;
    
    protected $guarded =[];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
