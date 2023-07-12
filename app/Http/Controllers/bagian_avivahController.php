<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagian_avivahController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $bagian_avivah= \DB::table('t_bagian_avivah')->get();
    $data = array('bagian_avivah' => $bagian_avivah);
    return view ('bagian/index', $data);
}

}