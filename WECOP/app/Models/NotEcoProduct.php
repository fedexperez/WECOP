<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotEcoProduct extends Model
{
    use HasFactory;

    //Attributes id, name, emision, productLife
    protected $fillable = ['name', 'price', 'emision', 'productLife'];

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

    public function getEmision()
    {
        return $this->attributes['emision'];
    }

    public function setEmision($emision)
    {
        $this->attributes['emision'] = $emision;
    }

    public function getProductLife()
    {
        return $this->attributes['productLife'];
    }

    public function setProductLife($productLife)
    {
        $this->attributes['productLife'] = $productLife;
    }
}