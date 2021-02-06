<?php

namespace App\Repositories\SubscriptionClass;

use Illuminate\Database\Eloquent\Model;

class SubscriptionClass extends Model
{
    protected $table = 'subscription_classes';
    public function classRules()
    {
        return $this->hasMany('App\Repositories\SubscriptionClassRule\SubscriptionClassRule');
    }
    
}
