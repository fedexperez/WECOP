<?php

/** 
 * WECOP
 * 
 * @author fperezm1
 * PHP version: 8.0.2
 */

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Address;
use App\Item;

/** 
 * Class Order
 * 
 * @package App/Models
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = ['payment_type', 'shipping'];
    

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getStatus()
    {
        return $this->attributes['status'];
    }

    public function setStatus($status)
    {
        $this->attributes['status'] = $status;
    }

    public function getPaymentType()
    {
        return $this->attributes['payment_type'];
    }

    public function setPaymentType($paymentType)
    {
        $this->attributes['payment_type'] = $paymentType;
    }

    public function getDate()
    {
        return $this->attributes['date'];
    }

    public function setDate($date)
    {
        $this->attributes['date'] = $date;
    }    
    
    public function getAddress()
    {
        return $this->attributes['address_id'];
    }

    public function setAddress($address)
    {
        $this->attributes['address_id'] = $address;
    }

    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }

    public function items(){
        return $this->hasMany(Item::class);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public static function validate(Request $request)
    {

        $request->validate([
            'paymentType' => 'required',
            'shipping' => 'required',
        ]);
    }
    
}
