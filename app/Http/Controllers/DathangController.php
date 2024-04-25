<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DathangController extends Controller
{
    public function dathang(){
             return view('pages.dathang');
       }
}
