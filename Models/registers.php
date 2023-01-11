<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthTrait;
class registers extends Model implements Authenticatable
{
    use HasFactory, AuthTrait;
    // inisialisasi table
    protected $table = 'registers';
    public $timestamps = false;
    public $fillable = [
        'name',
        'Email_Address',
        'password',
        'Confirm_Password',
        'Gender',
        'Date_of_Birth',
        'Country'
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function($model){
            $admin = 'admin';
            $email = $model->attributes['Email_Address'];

            if(strpos($email, $admin) != false){
                $model->attributes['role'] = 'Admin';
            }
        });
    }
}
