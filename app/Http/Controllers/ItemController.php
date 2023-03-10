<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ItemController extends Controller
{
    public function index()
    {
        $items = DB::table('items')->get();

        return view('items.index', [
            'items' => $items
        ]);
    }

    public function tambah()
    {
        return view('items.tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('items')->insert([
            'name' => $request->name,
            'qr_num' => Crypt::encryptString($request->id),
            'category' => $request->category,
            'status' => $request->status,
            'condition' => $request->condition,
            'type' => $request->type
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/items');
    }

    public function search($qr_num)
    {
        $item = DB::table('items')->where('qr_num', $qr_num)->get();
        return view('items.index', ['items' => $item]);

    }
}
