<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\Pariwisata;

class PariwisataController extends Controller
{
    public function index()
    {
        $datas = Pariwisata::orderBy('name','asc')->get();

        return view('layouts.user.pariwisata.index',compact('datas'));
    }

    public function detail($id)
    {
        $data = Pariwisata::whereId($id)->first();
        return view('layouts.user.pariwisata.detail',compact('data'));

    }
}
