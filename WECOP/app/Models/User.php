<?php

/** 
 * WECOP
 * 
 * @author Shiroke-013
 * PHP version: 8.0.2
 */

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    //Attributes id, name, user_name, credit_card, email, password and role.
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

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

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

    public function setUserName($userName)
    {
        $this->attributes['user_name'] = $userName;
    }

    public function getCreditCard()
    {
        return $this->attributes['credit_card'];
    }

    public function setCreditCard($creditCard)
    {
        $this->attributes['credit_card'] = $creditCard;
    }

    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }

    public function getRole()
    {
        return $this->attributes['role'];
    }

    public function setRole($role)
    {
        $this->attributes['role'] = $role;
    }

    public function getRemember()
    {
        return $this->attributes['remember'];
    }

    public function setRemember($remember)
    {
        $this->attributes['remember'] = $remember;
    }

    public static function validate(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'name' => 'required',
            'credit_card' => 'required',
            'email'  => 'required',
            'password'  => 'required',
        ]);
    }
}
