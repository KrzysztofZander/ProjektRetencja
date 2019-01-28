<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Parameter;
use\Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Parameter as ParameterResource;

class ParametersController extends BaseController
{
    public function index(){
    	
    	$chartparameters = Parameter::all();
        return  ParameterResource::collection($chartparameters);
         
                                        


    }
}
