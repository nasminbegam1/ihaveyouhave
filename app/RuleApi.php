<?php

namespace App;

use Froiden\RestAPI\ApiModel;

class RuleApi extends ApiModel
{
    protected $table = 'rules';
    protected $default = [
        'description', 'status', 'created_at'
    ];
    
    protected $filterable = ['description','status', 'created_at'];
}
