<?php

namespace App\Http\Controllers\api;

use Froiden\RestAPI\ApiController;
use Illuminate\Http\Request;
use App\RuleApi;

class RuleController extends ApiController
{
    protected $model = RuleApi::class;
}
