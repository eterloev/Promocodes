<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "value",
        "expiration_date",
        "product_id",
        "user_id"
    ];

    public function user()
    {
        $this->hasOne(User::class);
    }

    public function product()
    {
        $this->hasOne(Product::class);
    }
}
