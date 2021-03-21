<?php

/** 
 * @author fperezm1
 * PHP version: 8.0.2
 * */

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['payment_type', 'shipping'];
    

    public function getId()
    {
        return $this->attributes['order_id'];
    }

    public function setId($id)
    {
        $this->attributes['order_id'] = $id;
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
    
    public function getShipping()
    {
        return $this->attributes['shipping'];
    }

    public function setShipping($shipping)
    {
        $this->attributes['shipping'] = $shipping;
    }

    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }

    public static function validate(Request $request)
    {

        $request->validate([
            "paymentType" => "required",
            "shipping" => "required",
        ]);
    }
    
}
