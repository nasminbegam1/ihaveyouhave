<?php

namespace App;

use Froiden\RestAPI\ApiModel;

class CardApi extends ApiModel
{
    protected $table = 'cards';
    protected $default = [
        'description','answer','image_name', 'status', 'created_at'
    ];
    
    protected $filterable = ['description','answer','image_name', 'status', 'created_at'];
}
