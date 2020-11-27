<?php
namespace App\Http\Controllers;

use View;
use Illuminate\Support\Facades\Cache;

class SimpancacheController extends Controller
{
public function index(){

      $value = Cache::get('key');

  // return View::make('carifilm')->with('payload', $cetak);
  }
}
