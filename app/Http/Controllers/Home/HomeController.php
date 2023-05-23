<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index($value='')
  {
    $data=[
    'nama'=>'Farhan Rizky Ramadhan',
    'matkul'=>'UAS Pemograman Web 1'
    ];
      return view('Home.home',$data);
  }
}
