<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shoe;
use App\Models\User;
class Cart extends Model
{
    protected $fillable = ['user_id', 'shoe_id', 'size', 'quantity'];

    public function shoe()
    {
        return $this->belongsTo(Shoe::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalPriceAttribute()
    {
        return $this->quantity * $this->shoe->price;
    }
}
