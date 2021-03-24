<?php

namespace App\Http\Controllers\ApiCrud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
      return response()->json(['status' => true]);
  }
}
