<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBladeController extends Controller
{
    public function welcomePage()
    {
        return view('HomeBladeFiles.welcome');
    }

}
