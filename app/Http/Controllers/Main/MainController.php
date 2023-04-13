<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /*
     * Function to display hotel view
     */
    public function index()
    {
        return view('index');
    }
}
