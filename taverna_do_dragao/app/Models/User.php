<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'userType'
    ];

    public function Product(){
        return $this->hasOne(User::class, 'user_id');
    }
    public function Order(){
        return $this->hasOne(User::class, 'user_id');
    }
}
