<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\MasyarakatEvent;

class MasyarakatEventController extends Controller
{
    public function index()
    {
        $datas = MasyarakatEvent::orderBy('created_at','asc')->get();

        return view('layouts.user.masyarakat-event.index',compact('datas'));
    }

    public function detail($id)
    {
        $data = MasyarakatEvent::whereId($id)->first();
        return view('layouts.user.masyarakat-event.detail',compact('data'));

    }
}
