<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'typeFood','price','image','user_id'];

    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Orders(){
        return $this->belongsToMany(Order::class)->withPivot('quantity')->withPivot('name')->withTimestamps();    
    }
}
