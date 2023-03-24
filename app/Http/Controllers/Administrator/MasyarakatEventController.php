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
        ->editColumn('name', function ($masyarakatEvent) {
            return '<a href="' .
                ($masyarakatEvent->url_image != null ? $masyarakatEvent->url_image :  asset('images/static/empty.png')) .
                '" target="_blank"><img alt="image" class="table-avatar align-middle rounded" width="30px" height="30px" src="' .
                ($masyarakatEvent->url_image != null ? $masyarakatEvent->url_image :  asset('images/static/empty.png')) .
                '"></a>' .
                ' ' .
                $masyarakatEvent->name;
        })
        ->editColumn('action', function ($masyarakatEvent) {
            $show =
                '<a href="' .
                route('administrator.masyarakat-event.show', $masyarakatEvent->id) .
                '" class="btn btn-info btn-flat btn-xs" title="Show"><i class="fa fa-eye fa-sm"></i></a>';
            $edit =
                '<a href="' .
                route('administrator.masyarakat-event.edit', $masyarakatEvent->id) .
                '" class="btn btn-warning btn-flat btn-xs" title="Edit"><i class="fa fa-pencil-alt fa-sm"></i></a>';

            $delete =
                '<a href="#" data-href="'.
                route('administrator.masyarakat-event.destroy', $masyarakatEvent->id) .
                '" class="btn btn-danger btn-flat btn-xs"
                title="Delete" data-toggle="modal"
                data-text="Apakah anda yakin untuk menghapus umkm '.$masyarakatEvent->name.'"
                data-target="#modal-confirmation-delete" data-value="'.$masyarakatEvent->id.'">
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
        $data = new MasyarakatEvent();
        $title = "Buat Event Masyarakat";
        $action = "create";
        return view('layouts.administrator.masyarakat-event.create', compact('title','data','action'));
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
                $filePathLogo = $request->url_image->store('public/image/event-masyarakat');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
            }

            $masyarakatEvent = new MasyarakatEvent();
            $masyarakatEvent->name = $request->name;
            $masyarakatEvent->description = $request->description;
            $masyarakatEvent->url_image = isset($request->url_image) ? $fileUrlLogo : null;
            $masyarakatEvent->save();

            DB::commit();


        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }
        Alert::alert('Success', 'Event Masyarkat Telah di Daftarkan', 'success');
        return redirect()->route('administrator.masyarakat-event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasyarakatEvent  $masyarakatEvent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  MasyarakatEvent::find($id);
        $title = "Lihat Event Masyarakat";
        $action = "show";
        return view('layouts.administrator.masyarakat-event.show', compact('title','data','action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasyarakatEvent  $masyarakatEvent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  MasyarakatEvent::find($id);
        $title = "Ubah Event Masyarakat";
        $action = "edit";
        return view('layouts.administrator.masyarakat-event.edit', compact('title','data','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasyarakatEvent  $masyarakatEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            //'url_image' => 'required',
        ]);

        $masyarakatEvent = MasyarakatEvent::findOrFail($id);


        DB::beginTransaction();
        try {


            if ($request->url_image) {
                Storage::delete(str_replace(url('storage'), 'public', $masyarakatEvent->url_image));
                $filePathLogo = $request->url_image->store('public/image/event-masyarakat');
                $fileUrlLogo = '/storage' . str_replace('public', '', $filePathLogo);
                //$tourismInfo->url_cover_image = $filePathUrlCoverImage;
            }

            $masyarakatEvent->name = $request->name;
            $masyarakatEvent->description = $request->description;
            $masyarakatEvent->url_image = isset($request->url_image) ? $fileUrlLogo :  $masyarakatEvent->url_image;
            $masyarakatEvent->save();

            DB::commit();



        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Success', 'Event Masyarkat ' . $masyarakatEvent->name . ' Telah di Ubah', 'info');
        return redirect()->route('administrator.masyarakat-event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasyarakatEvent  $masyarakatEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masyarakatEvent = MasyarakatEvent::findOrFail($id);

        DB::beginTransaction();
        try {

            MasyarakatEvent::destroy($id);
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Deleted', 'Event Masyarakat ' . $masyarakatEvent->name . ' Telah di dihapus', 'error');
        return redirect()->route('administrator.masyarakat-event.index');
    }
}
