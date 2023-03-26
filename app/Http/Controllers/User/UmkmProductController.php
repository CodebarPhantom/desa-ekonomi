<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\UmkmProduct;

class UmkmProductController extends Controller
{
    public function index()
    {
        $datas = UmkmProduct::select('umkm_products.*', 'umkm.name as umkm_name')
        ->leftJoin('umkms as umkm', 'umkm.id', '=', 'umkm_products.umkm_id')
        ->orderBy("umkm_products.name","asc")->get();

        return view('layouts.user.umkm-product.index',compact('datas'));
    }

    public function detail($id)
    {
        $data = UmkmProduct::select('umkm_products.*', 'umkm.name as umkm_name')
        ->leftJoin('umkms as umkm', 'umkm.id', '=', 'umkm_products.umkm_id')
        ->orderBy("umkm_products.name","asc")->where('umkm_products.id',$id)->first();
        return view('layouts.user.umkm-product.detail',compact('data'));

    }
}
