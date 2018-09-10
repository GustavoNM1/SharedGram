<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }


    public function gallery()
    {
        return view('gallery');
    }

    public function profile()
    {
        return view('profile');
    }

    public function friends()
    {
        return view('friends');
    }

    public function favorites()
    {
        return view('favorites');
    }

    public function recents()
    {
        return view('recents');
    }

    public function notice()
    {
        return view('notice');
    }
}
