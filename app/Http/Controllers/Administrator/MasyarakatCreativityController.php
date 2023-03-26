<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrator\MasyarakatCreativity;
use Illuminate\Support\Facades\Storage;
use DB,Alert,DataTables;

class MasyarakatCreativityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.administrator.masyarakat-creativity.index');
    }

    public function data()
    {
        $datas = MasyarakatCreativity::orderBy("name","asc");

        return DataTables::of($datas)
        ->editColumn('name', function ($masyarakatCreativity) {
            return '<a href="' .
                ($masyarakatCreativity->url_image != null ? $masyarakatCreativity->url_image :  asset('images/static/empty.png')) .
                '" target="_blank"><img alt="image" class="table-avatar align-middle rounded" width="30px" height="30px" src="' .
                ($masyarakatCreativity->url_image != null ? $masyarakatCreativity->url_image :  asset('images/static/empty.png')) .
                '"></a>' .
                ' ' .
                $masyarakatCreativity->name;
        })
        ->editColumn('action', function ($masyarakatCreativity) {
            $show =
                '<a href="' .
                route('administrator.masyarakat-creativity.show', $masyarakatCreativity->id) .
                '" class="btn btn-info btn-flat btn-xs" title="Show"><i class="fa fa-eye fa-sm"></i></a>';
            $edit =
                '<a href="' .
                route('administrator.masyarakat-creativity.edit', $masyarakatCreativity->id) .
                '" class="btn btn-warning btn-flat btn-xs" title="Edit"><i class="fa fa-pencil-alt fa-sm"></i></a>';

            $delete =
                '<a href="#" data-href="'.
                route('administrator.masyarakat-creativity.destroy', $masyarakatCreativity->id) .
                '" class="btn btn-danger btn-flat btn-xs"
                title="Delete" data-toggle="modal"
                data-text="Apakah anda yakin untuk menghapus Kreatifitas Masyarakat '.$masyarakatCreativity->name.'"
                data-target="#modal-confirmation-delete" data-value="'.$masyarakatCreativity->id.'">
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
        $data = new MasyarakatCreativity();
        $title = "Buat Kreatifitas Masyarkat";
        $action = "create";
        return view('layouts.administrator.masyarakat-creativity.create', compact('title','data','action'));
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
            'description' => 'required',
            'url_image' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $fileUrlLogo = null;

            if ($request->url_image) {
                $filePathLogo = $request->url_image->store('public/image/creativity-masyarakat');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
            }

            $masyarakatCreativity = new MasyarakatCreativity();
            $masyarakatCreativity->name = $request->name;
            $masyarakatCreativity->description = $request->description;
            $masyarakatCreativity->url_image = isset($request->url_image) ? $fileUrlLogo : null;
            $masyarakatCreativity->save();

            DB::commit();


        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }
        Alert::alert('Success', 'Kreatifitas Masyarakat Telah di Daftarkan', 'success');
        return redirect()->route('administrator.masyarakat-creativity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasyarakatCreativity  $masyarakatCreativity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  MasyarakatCreativity::find($id);
        $title = "Lihat Kreatifitas Masyarkat";
        $action = "show";
        return view('layouts.administrator.masyarakat-creativity.show', compact('title','data','action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasyarakatCreativity  $masyarakatCreativity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  MasyarakatCreativity::find($id);
        $title = "Ubah Kreatifitas Masyarkat";
        $action = "edit";
        return view('layouts.administrator.masyarakat-creativity.edit', compact('title','data','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasyarakatCreativity  $masyarakatCreativity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            //'url_image' => 'required',
        ]);

        $masyarakatCreativity = MasyarakatCreativity::findOrFail($id);


        DB::beginTransaction();
        try {


            if ($request->url_image) {
                Storage::delete(str_replace(url('storage'), 'public', $masyarakatCreativity->url_image));
                $filePathLogo = $request->url_image->store('public/image/event-masyarakat');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
                //$tourismInfo->url_cover_image = $filePathUrlCoverImage;
            }

            $masyarakatCreativity->name = $request->name;
            $masyarakatCreativity->description = $request->description;
            $masyarakatCreativity->url_image = isset($request->url_image) ? $fileUrlLogo :  $masyarakatCreativity->url_image;
            $masyarakatCreativity->save();

            DB::commit();



        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Success', 'Kreatifitas Masyarakat ' . $masyarakatCreativity->name . ' Telah di Ubah', 'info');
        return redirect()->route('administrator.masyarakat-creativity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasyarakatCreativity  $masyarakatCreativity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masyarakatCreativity = MasyarakatCreativity::findOrFail($id);

        DB::beginTransaction();
        try {

            MasyarakatCreativity::destroy($id);
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Deleted', 'Kreatifitas Masyarkat ' . $masyarakatCreativity->name . ' Telah di dihapus', 'error');
        return redirect()->route('administrator.masyarakat-creativity.index');
    }
}
