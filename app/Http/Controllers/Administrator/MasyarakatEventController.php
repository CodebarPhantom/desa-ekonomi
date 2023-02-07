<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\MasyarakatEvent;
use Illuminate\Support\Facades\Storage;
use DB,Alert,DataTables;

class MasyarakatEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.administrator.masyarakat-event.index');
    }

    public function data()
    {
        $datas = MasyarakatEvent::orderBy("name","asc");

        return DataTables::of($datas)
        ->editColumn('name', function ($umkmProduct) {
            return '<a href="' .
                ($umkmProduct->url_image != null ? $umkmProduct->url_image :  "/storage/image/static/empty.png") .
                '" target="_blank"><img alt="image" class="table-avatar align-middle rounded" width="30px" height="30px" src="' .
                ($umkmProduct->url_image != null ? $umkmProduct->url_image :  "/storage/image/static/empty.png") .
                '"></a>' .
                ' ' .
                $umkmProduct->name;
        })
        ->editColumn('action', function ($masyarakatProduct) {
            $show =
                '<a href="' .
                route('administrator.masyarakat-product.show', $masyarakatProduct->id) .
                '" class="btn btn-info btn-flat btn-xs" title="Show"><i class="fa fa-eye fa-sm"></i></a>';
            $edit =
                '<a href="' .
                route('administrator.masyarakat-product.edit', $masyarakatProduct->id) .
                '" class="btn btn-warning btn-flat btn-xs" title="Edit"><i class="fa fa-pencil-alt fa-sm"></i></a>';

            $delete =
                '<a href="#" data-href="'.
                route('administrator.masyarakat-product.destroy', $masyarakatProduct->id) .
                '" class="btn btn-danger btn-flat btn-xs"
                title="Delete" data-toggle="modal"
                data-text="Apakah anda yakin untuk menghapus umkm '.$masyarakatProduct->name.'"
                data-target="#modal-confirmation-delete" data-value="'.$masyarakatProduct->id.'">
                <i class="fa fa-trash"></i>
                </a>';
            return $show.$edit.$delete;
        })
        ->rawColumns(['name','action'])
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
     * @param  \App\Models\MasyarakatEvent  $masyarakatEvent
     * @return \Illuminate\Http\Response
     */
    public function show(MasyarakatEvent $masyarakatEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasyarakatEvent  $masyarakatEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(MasyarakatEvent $masyarakatEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasyarakatEvent  $masyarakatEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasyarakatEvent $masyarakatEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasyarakatEvent  $masyarakatEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasyarakatEvent $masyarakatEvent)
    {
        //
    }
}
