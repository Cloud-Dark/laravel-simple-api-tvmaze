<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use JPinkney\TVMaze\Client;
use Illuminate\Support\Facades\Cache;

class CarifilmController extends Controller
{
  public function carifilm(){

     $judul =  app('request')->input('judul') ;
     $Client = new Client;
     $tampildata =  $Client->TVMaze->search("$judul");

     return $tampildata;

  }

}
