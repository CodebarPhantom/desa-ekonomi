<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\MasyarakatCreativity;

class MasyarakatCreativityController extends Controller
{
    public function index()
    {
        $datas = MasyarakatCreativity::orderBy('created_at','asc')->get();

        return view('layouts.user.masyarakat-creativity.index',compact('datas'));
    }

    public function detail($id)
    {
        $data = MasyarakatCreativity::whereId($id)->first();
        return view('layouts.user.masyarakat-creativity.detail',compact('data'));

    }
}
