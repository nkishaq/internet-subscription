<?php

namespace App\Repositories\SubscriptionClassRule;

use Illuminate\Database\Eloquent\Model;

class SubscriptionClassRule extends Model
{
    protected $table = 'subscription_class_rules';
    public function rule()
    {
        return $this->belongsTo('App\Repositories\SubscriptionRule\SubscriptionRule','subscription_rule_id');
    }

}
