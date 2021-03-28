<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dog;

class ApiController extends Controller
{
    public function myFirstDog(){
        $firstdog = Dog::orderBy('id', 'asc')->first();
        return response()->json($firstdog);
    }
}
