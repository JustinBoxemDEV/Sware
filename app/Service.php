<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Service extends Model
{
    protected $fillable = [
        'id', 'serviceName', 'servicePriceSolo', 'servicePriceMulti',
    ];
    
    public function Order() {
        return $this->hasMany(Order::class);
    }
}
