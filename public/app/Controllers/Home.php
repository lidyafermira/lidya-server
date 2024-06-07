<?php

namespace App\Controllers;

class Home extends BaseController
{

public function index():string
{
    $data = [ 
        'title'=>'Aplikasi Penjualan Tas Dan Koper',
        'description'=> 'Web ini untuk transaksi penjualan Tas dan Koper',
        'author'=> '2022101031 - Lidya Fermira Br Perangin-Angin'
    ];
    return view ('login/index', $data);
}
}