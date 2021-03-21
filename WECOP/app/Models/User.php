<?php

/** 
 * @author Shiroke-013
 * PHP version: 8.0.2
 * */

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_name','name','credit_card','email','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password','remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['email_verified_at' => 'datetime'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getUserName()
    {
        return $this->attributes['user_name'];
    }

    public function setUserName($user_name)
    {
        $this->attributes['user_name'] = $user_name;
    }

    public function getCreditCard()
    {
        return $this->attributes['credit_card'];
    }

    public function setCreditCard($credit_card)
    {
        $this->attributes['credit_card'] = $credit_card;
    }

    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }

    public static function validate(Request $request)
    {

        $request->validate([
            "user_name" => "required",
            "name" => "required",
            "credit_card" => "required",
            "email"  => "required",
            "password"  => "required",
        ]);
    }
}
