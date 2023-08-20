<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;

class DashBoardController extends Controller
{
    public  function index()
    {
        $user = auth()->user();
        if ($user->type == 'user')
        {
            return redirect()->route('home');
        }
        elseif ($user->type== 'admin')
        {
            return view('Admin.Dashboard.home');
        }

        else
        {
            return  redirect()->route('register');
        }


    }
}
