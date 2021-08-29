<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ApiController extends Controller
{
    /**
     * Register Student
     * @param Request $request
     * @return Bolean $result
    */

    public function register(Request $request)
    {
        $validator = validator::make($request->all(),[
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:8"
      ]);
      if($validator->fails()){
          return response()->json([
              'status'=>400 ,
              'message'=> "Bad Request"
          ],400);
      }
    }

}
