<?php

namespace App\Http\Controllers\Administrator;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\UmkmProduct;
use Illuminate\Support\Facades\Storage;
use DB,Alert,DataTables;

class UmkmProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.administrator.umkm-product.index');

    }

    public function data()
    {
        $datas = UmkmProduct::select('umkm_products.*', 'umkm.name as umkm_name')
        ->leftJoin('umkms as umkm', 'umkm.id', '=', 'umkm_products.umkm_id')
        ->orderBy("umkm_products.name","asc");

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
        ->editColumn('umkm_name', function ($umkmProduct) {
           return $umkmProduct->umkm_name;
        })
        ->editColumn('action', function ($umkmProduct) {
            $show =
                '<a href="' .
                route('administrator.umkm-product.show', $umkmProduct->id) .
                '" class="btn btn-info btn-flat btn-xs" title="Show"><i class="fa fa-eye fa-sm"></i></a>';
            $edit =
                '<a href="' .
                route('administrator.umkm-product.edit', $umkmProduct->id) .
                '" class="btn btn-warning btn-flat btn-xs" title="Edit"><i class="fa fa-pencil-alt fa-sm"></i></a>';

            $delete =
                '<a href="#" data-href="'.
                route('administrator.umkm-product.destroy', $umkmProduct->id) .
                '" class="btn btn-danger btn-flat btn-xs"
                title="Delete" data-toggle="modal"
                data-text="Apakah anda yakin untuk menghapus umkm '.$umkmProduct->name.'"
                data-target="#modal-confirmation-delete" data-value="'.$umkmProduct->id.'">
                <i class="fa fa-trash"></i>
                </a>';
            return $show.$edit.$delete;
        })
        ->rawColumns(['action','name'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new UmkmProduct();
        $title = "Buat Produk UMKM";
        $action = "create";
        return view('layouts.administrator.umkm-product.create', compact('title','data','action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'umkm_id' => 'required',
            'description' => 'required',
            'url_image' => 'required'
        ]);

        DB::beginTransaction();
        try {

            $fileUrlLogo = null;

            if ($request->url_image) {
                $filePathLogo = $request->url_image->store('public/image/product-umkm');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
            }

            $umkmProduct = new UmkmProduct();
            $umkmProduct->name = $request->name;
            $umkmProduct->umkm_id = $request->umkm_id;
            $umkmProduct->description = $request->description;
            $umkmProduct->url_image = isset($request->url_image) ? $fileUrlLogo : null;
            $umkmProduct->save();

            DB::commit();


        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }
        Alert::alert('Success', 'Produk UMKM Telah di Daftarkan', 'success');
        return redirect()->route('administrator.umkm-product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UmkmProduct  $umkmProduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  UmkmProduct::select('umkm_products.*', 'umkm.name as umkm_name')
        ->leftJoin('umkms as umkm', 'umkm.id', '=', 'umkm_products.umkm_id')->find($id);
        $title = "Lihat Produk UMKM";
        $action = "show";
        return view('layouts.administrator.umkm-product.show', compact('title','data','action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UmkmProduct  $umkmProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(UmkmProduct $umkmProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UmkmProduct  $umkmProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UmkmProduct $umkmProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UmkmProduct  $umkmProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(UmkmProduct $umkmProduct)
    {
        //
    }


}
