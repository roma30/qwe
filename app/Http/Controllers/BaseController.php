<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function getIndex($id='poexali'){
		return view ('base')->with('id',$id);
	}
}
