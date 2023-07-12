<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengeluaranitem_avivahController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $pengeluaranitem_avivah= \DB::table('t_pengeluaranitem_avivah')->get();
    $data = array('pengeluaranitem_avivah' => $pengeluaranitem_avivah);
    return view ('pengeluaranitem/index', $data);
}

}