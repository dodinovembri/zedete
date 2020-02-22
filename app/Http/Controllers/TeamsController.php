<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;

class TeamsController extends Controller
{
    public function teams()
    {
    	# code...
    	return $data['teams'] = Teams::all();
    }
}
