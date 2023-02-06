<?php

namespace App\Http\Controllers\Administrator;

use App\Models\Administrator\Umkm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB,Alert,DataTables;
use Illuminate\Support\Facades\Log;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.administrator.umkm.index');
    }

    public function data()
    {
        $datas = Umkm::orderBy("name","asc");

        return DataTables::of($datas)
        ->editColumn('action', function ($umkm) {
            $show =
                '<a href="' .
                route('administrator.umkm.show', $umkm->id) .
                '" class="btn btn-info btn-flat btn-xs" title="Show"><i class="fa fa-eye fa-sm"></i></a>';
            $edit =
                '<a href="' .
                route('administrator.umkm.edit', $umkm->id) .
                '" class="btn btn-warning btn-flat btn-xs" title="Edit"><i class="fa fa-pencil-alt fa-sm"></i></a>';

            $delete =
                '<a href="#" data-href="'.
                route('administrator.umkm.destroy', $umkm->id) .
                '" class="btn btn-danger btn-flat btn-xs"
                title="Delete" data-toggle="modal"
                data-text="Apakah anda yakin untuk menghapus umkm '.$umkm->name.'"
                data-target="#modal-confirmation-delete" data-value="'.$umkm->id.'">
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
        $data = new Umkm();
        $title = "Buat UMKM";
        $action = "create";
        return view('layouts.administrator.umkm.create', compact('title','data','action'));
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

            if ($request->url_logo) {
                $filePathLogo = $request->url_logo->store('public/image/logo');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
            }

            $umkm = new Umkm();
            $umkm->name = $request->name;
            $umkm->address = $request->address;
            $umkm->description = $request->description;
            $umkm->url_logo = isset($request->url_logo) ? $fileUrlLogo : null;
            $umkm->save();

            DB::commit();


        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }
        Alert::alert('Success', 'UMKM Telah di Daftarkan', 'success');
        return redirect()->route('administrator.umkm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Umkm::find($id);
        $title = "Lihat UMKM";
        $action = "show";
        return view('layouts.administrator.umkm.show', compact('title','data','action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  Umkm::find($id);
        $title = "Ubah UMKM";
        $action = "edit";
        return view('layouts.administrator.umkm.edit', compact('title','data','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]);

        $umkm = Umkm::findOrFail($id);


        DB::beginTransaction();
        try {


            if ($request->url_logo) {
                Storage::delete(str_replace(url('storage'), 'public', $umkm->url_logo));
                $filePathLogo = $request->url_logo->store('public/image/logo');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
                //$tourismInfo->url_cover_image = $filePathUrlCoverImage;
            }

            $umkm->name = $request->name;
            $umkm->address = $request->address;
            $umkm->description = $request->description;
            $umkm->url_logo = isset($request->url_logo) ? $fileUrlLogo :  $umkm->url_logo;
            $umkm->save();

            DB::commit();



        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Success', 'UMKM ' . $umkm->name . ' Telah di Ubah', 'info');
        return redirect()->route('administrator.umkm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $umkm = Umkm::findOrFail($id);

        DB::beginTransaction();
        try {

            Umkm::destroy($id);
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Deleted', 'UMKM ' . $umkm->name . ' Telah di dihapus', 'error');
        return redirect()->route('administrator.umkm.index');
    }

    public function umkmJson(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $umkms = Umkm::paginate(10);
        } else {
            $umkms = Umkm::where('name', 'like', '%' . $search . '%')
                ->paginate(25);
        }

        $response = [];
        foreach ($umkms as $umkm) {
            $response[] = [
                'id' => $umkm->id,
                'text' =>$umkm->name
            ];
        }

        //Log::debug(json_encode($response));

        echo json_encode($response);
        exit();
    }
}
