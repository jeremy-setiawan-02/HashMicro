<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'userId';
    protected $table = 'user';
    protected $fillable = array('username','userEmail','userAddress','userPassword','userGender','userDOB','userRole');

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function headerTransaction(){
        return $this->hasMany(HeaderTransaction::class);
    }
}