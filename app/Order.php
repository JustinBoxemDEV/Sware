<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'userID', 'packageID', 'service1ID', 'service2ID', 'service3ID',
    ];
}
