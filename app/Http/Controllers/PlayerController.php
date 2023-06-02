<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
public function index(){
	//response json test
  return response()->json([
	  'name' => 'Abigail',
    'state' => 'CA',
  ]);
}}
