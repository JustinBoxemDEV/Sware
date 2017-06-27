<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id', 'serviceName', 'servicePrice',
    ];
    
    public function Order() {
        return $this->hasMany(Order::class);
    }
}
