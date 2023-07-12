<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugas_avivahController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $petugas_avivah= \DB::table('t_petugas_avivah')->get();
    $data = array('petugas_avivah' => $petugas_avivah);
    return view ('tugas/index', $data);
}

}