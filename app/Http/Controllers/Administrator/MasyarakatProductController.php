<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\MasyarakatProduct;
use Illuminate\Support\Facades\Storage;

use DB,Alert,DataTables;


class MasyarakatProductController extends Controller
{
    public function index()
    {
        return view('layouts.administrator.masyarakat-product.index');

    }

    public function data()
    {
        $datas = MasyarakatProduct::orderBy("name","asc");

        return DataTables::of($datas)
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
        ->rawColumns(['action'])
        ->make(true);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}
