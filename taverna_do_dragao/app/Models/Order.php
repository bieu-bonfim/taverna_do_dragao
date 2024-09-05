<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['costumerName', 'totalPrice', 'typeFood','price','image','user_id'];

    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Product(){
        return $this->belongsToMany(Product::class)->withPivot('quantity')->withPivot('name')->withTimestamps();
    }
}
