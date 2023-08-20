<?php

namespace App\Http\Controllers\Fornt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomePageController extends Controller
{
    public  function home()
    {
       return view('Front.Home.homePage');
    }
}
