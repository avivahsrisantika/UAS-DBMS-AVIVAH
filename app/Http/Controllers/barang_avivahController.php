<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barang_avivahController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $barang_avivah= \DB::table('t_barang_avivah')->get();
    $data = array('barang_avivah' => $barang_avivah);
    return view ('barang/index', $data);
}

}