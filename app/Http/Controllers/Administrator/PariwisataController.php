<?php

namespace App\Http\Controllers\Administrator;

use App\Models\Administrator\Pariwisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB,Alert,DataTables;


class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.administrator.pariwisata.index');

    }

    public function data()
    {
        $datas = Pariwisata::orderBy("name","asc");

        return DataTables::of($datas)
        ->editColumn('action', function ($pariwisata) {
            $show =
                '<a href="' .
                route('administrator.pariwisata.show', $pariwisata->id) .
                '" class="btn btn-info btn-flat btn-xs" title="Show"><i class="fa fa-eye fa-sm"></i></a>';
            $edit =
                '<a href="' .
                route('administrator.pariwisata.edit', $pariwisata->id) .
                '" class="btn btn-warning btn-flat btn-xs" title="Edit"><i class="fa fa-pencil-alt fa-sm"></i></a>';

            $delete =
                '<a href="#" data-href="'.
                route('administrator.pariwisata.destroy', $pariwisata->id) .
                '" class="btn btn-danger btn-flat btn-xs"
                title="Delete" data-toggle="modal"
                data-text="Apakah anda yakin untuk menghapus pariwisata '.$pariwisata->name.'"
                data-target="#modal-confirmation-delete" data-value="'.$pariwisata->id.'">
                <i class="fa fa-trash"></i>
                </a>';
            return $show.$edit.$delete;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Pariwisata();
        $title = "Buat Pariwisata";
        $action = "create";
        return view('layouts.administrator.pariwisata.create', compact('title','data','action'));
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
            'address' => 'required',
            'description' => 'required'
        ]);

        DB::beginTransaction();
        try {

            $fileUrlLogo = null;
            $fileUrlCoverImage = null;

            if ($request->url_logo) {
                $filePathLogo = $request->url_logo->store('public/image/logo');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
            }

            if ($request->url_image) {
                $filePathCoverImage = $request->url_image->store('public/image/cover-image');
                $fileUrlCoverImage = '/storage' . str_replace('public', '', $filePathCoverImage);
            }


            $pariwisata = new Pariwisata();
            $pariwisata->name = $request->name;
            $pariwisata->address = $request->address;
            $pariwisata->category = $request->category;
            $pariwisata->description = $request->description;
            $pariwisata->url_logo = isset($request->url_logo) ? $fileUrlLogo : null;
            $pariwisata->url_image = isset($request->url_image) ? $fileUrlCoverImage : null;
            $pariwisata->url_video = isset($request->url_video) ? $request->url_video : null;
            $pariwisata->save();

            DB::commit();


        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }
        Alert::alert('Success', 'Tempat Pariwisata Telah di Daftarkan', 'success');
        return redirect()->route('administrator.pariwisata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Pariwisata::find($id);
        $title = "Lihat Pariwisata";
        $action = "show";
        return view('layouts.administrator.pariwisata.show', compact('title','data','action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  Pariwisata::find($id);
        $title = "Ubah Pariwisata";
        $action = "edit";
        return view('layouts.administrator.pariwisata.edit', compact('title','data','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]);

        $pariwisata = Pariwisata::findOrFail($id);


        DB::beginTransaction();
        try {


            if ($request->url_image) {
                Storage::delete(str_replace(url('storage'), 'public', $pariwisata->url_image));
                $filePathCoverImage = $request->url_image->store('public/image/cover-image');
                $fileUrlCoverImage = '/storage' . str_replace('public', '', $filePathCoverImage);
            }

            if ($request->url_logo) {
                Storage::delete(str_replace(url('storage'), 'public', $pariwisata->url_logo));
                $filePathLogo = $request->url_logo->store('public/image/logo');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
                //$tourismInfo->url_cover_image = $filePathUrlCoverImage;
            }


            $pariwisata->name = $request->name;
            $pariwisata->address = $request->address;
            $pariwisata->description = $request->description;
            $pariwisata->category = $request->category;
            $pariwisata->url_logo = isset($request->url_logo) ? $fileUrlLogo :  $pariwisata->url_logo;
            $pariwisata->url_image = isset($request->url_image) ? $fileUrlCoverImage : $pariwisata->url_image;
            $pariwisata->url_video = isset($request->url_video) ? $request->url_video : $pariwisata->url_video ;
            $pariwisata->save();

            DB::commit();



        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Success', 'Pariwisata ' . $pariwisata->name . ' Telah di Ubah', 'info');
        return redirect()->route('administrator.pariwisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pariwisata = Pariwisata::findOrFail($id);

        DB::beginTransaction();
        try {

            Pariwisata::destroy($id);
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Deleted', 'Pariwisata ' . $pariwisata->name . ' Telah di dihapus', 'error');
        return redirect()->route('administrator.pariwisata.index');
    }
}
