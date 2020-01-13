<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomeOne() {
        return view("home-one");
    }

    public function getHomeTwo() {
        return view("home-two");
    }
}
