<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\Umkm;

class UmkmController extends Controller
{
    public function index()
    {
        $datas = Umkm::orderBy('created_at','desc')->get();

        return view('layouts.user.umkm.index',compact('datas'));
    }

    public function detail($id)
    {
        $data = Umkm::whereId($id)->first();
        return view('layouts.user.umkm.detail',compact('data'));

    }
}
