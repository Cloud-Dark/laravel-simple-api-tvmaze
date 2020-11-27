<?php
namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use JPinkney\TVMaze\Client;


class CarifilmdepanController extends Controller
{
public function index($judul){


  $Client = new Client;
  $data =  $Client->TVMaze->search("$judul");
  $cetak = json_encode($data);


  return View::make('carifilm')->with('payload', $cetak);
  }
}
