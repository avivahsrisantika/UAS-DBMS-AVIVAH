<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengeluaran_avivahController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $pengeluaran_avivah= \DB::table('t_pengeluaran_avivah')->get();
    $data = array('pengeluaran_avivah' => $pengeluaran_avivah);
    return view ('pengeluaran/index', $data);
}

}