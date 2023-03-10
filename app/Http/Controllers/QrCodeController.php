<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QrCodeController extends Controller
{
    public function index()
    {
      return view('qrcode');
    }

    public function create($id)
  {
    $item = DB::table('items')->where('id', $id)->get();


    return view('qrcode', ['item' => $item]);
  }

}
