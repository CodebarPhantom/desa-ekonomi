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

    public function create()
    {
        $data = new MasyarakatProduct();
        $title = "Buat Produk Masyarakat";
        $action = "create";
        return view('layouts.administrator.masyarakat-product.create', compact('title','data','action'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'url_image' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $fileUrlLogo = null;

            if ($request->url_image) {
                $filePathLogo = $request->url_image->store('public/image/produk-masyarakat');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
            }

            $masyarakatProduct = new MasyarakatProduct();
            $masyarakatProduct->name = $request->name;
            $masyarakatProduct->description = $request->description;
            $masyarakatProduct->url_image = isset($request->url_image) ? $fileUrlLogo : null;
            $masyarakatProduct->save();

            DB::commit();


        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }
        Alert::alert('Success', 'Produk Masyarkat Telah di Daftarkan', 'success');
        return redirect()->route('administrator.masyarakat-product.index');
    }

    public function show($id)
    {
        $data =  MasyarakatProduct::find($id);
        $title = "Lihat Produk Masyarakat";
        $action = "show";
        return view('layouts.administrator.masyarakat-product.show', compact('title','data','action'));
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
