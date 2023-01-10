<?php

namespace App\Http\Controllers\Administrator;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.administrator.user.index');
    }

    public function data()
    {
        $datas = User::orderBy("name","asc");

        return DataTables::of($datas)
        ->editColumn('action', function ($user) {
            $show =
                '<a href="' .
                route('user.show', $user->id) .
                '" class="btn btn-info btn-flat btn-xs" title="' .
                Lang::get('Show') .
                '"><i class="fa fa-eye fa-sm"></i></a>';
            $edit =
                '<a href="' .
                route('user.edit', $user->id) .
                '" class="btn btn-danger btn-flat btn-xs" title="' .
                Lang::get('Edit') .
                '"><i class="fa fa-pencil-alt fa-sm"></i></a>';
            return $show . $edit;
        })
        ->rawColumns(['name', 'action', 'user_type'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("test");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
