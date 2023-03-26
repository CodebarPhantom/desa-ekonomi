<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\MasyarakatProduct;

class MasyarakatProductController extends Controller
{
    public function index()
    {
        $datas = MasyarakatProduct::orderBy('name','asc')->get();

        return view('layouts.user.masyarakat-product.index',compact('datas'));
    }

    public function detail($id)
    {
        $data = MasyarakatProduct::whereId($id)->first();
        return view('layouts.user.masyarakat-product.detail',compact('data'));

    }
}
