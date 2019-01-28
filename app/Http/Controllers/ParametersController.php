<?php

namespace App\Http\Controllers;

use App\Console\Commands\test;

use Illuminate\Http\Request;
use App\Parameter;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Parameter as ParameterResource;

class ParametersController extends Controller
{
    public function index(){
      
      $plists= Parameter::all();

      return view('parameters.list', ["plists"=>$plists]);
    }

    public function chart(Request $request){

        $number = $request->parametr;
        $plists= Parameter::all();
        $value = "Parametr".$number;



      $checkps = new Parameter;
      $checkps = DB::table('parameters')->where('description', '=', $value)->get();

      if (isset($checkps)){
       $divide=0;
        $num=0;
      foreach ($checkps as $check)
      {
        $num += $check->value;
        $divide++;
      }
      $charta = round ($num/$divide, 2);
      }

      return view('parameters.list', ["plists"=>$plists,
                                     "charta"=>$charta,
                                     "checkps"=>$checkps,
                                     'number'=> $number
                                     ]);
    }

}
