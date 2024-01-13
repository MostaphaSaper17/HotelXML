<?php

namespace App\Models;

use App\Models\RoomType;
use App\Models\GusetName;
use App\Models\ChildrenAge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ManualBooking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function room_types()
    {
        return $this->hasMany(RoomType::class);
    }

    public function children_ages()
    {
        return $this->hasMany(ChildrenAge::class);
    }

    public function guest_names()
    {
        return $this->hasMany(GusetName::class);
    }
}
