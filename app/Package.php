<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'id', 'packageName',
    ];
    
    public function Order() {
        return $this->hasMany(Order::class);
    }
}
