<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Package;
use App\Service;

class Order extends Model
{
    protected $fillable = [
        'id', 'userID', 'packageID', 'service1ID', 'service2ID', 'service3ID',
    ];
    
    public function User() {
        return $this->belongsTo(User::class, 'userID');
    }
    
    public function Package() {
        return $this->belongsTo(Package::class, 'packageID');
    }
    
    public function Service1() {
        return $this->belongsTo(Service::class, 'service1ID');
    }
    
    public function Service2() {
        return $this->belongsTo(Service::class, 'service2ID');
    }
    
    public function Service3() {
        return $this->belongsTo(Service::class, 'service3ID');
    }
}
