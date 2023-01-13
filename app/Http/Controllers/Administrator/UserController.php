<?php

namespace App\Http\Controllers\Administrator;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB,Alert,DataTables;

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
                route('administrator.user.show', $user->id) .
                '" class="btn btn-info btn-flat btn-xs" title="Show"><i class="fa fa-eye fa-sm"></i></a>';
            $edit =
                '<a href="' .
                route('administrator.user.edit', $user->id) .
                '" class="btn btn-warning btn-flat btn-xs" title="Edit"><i class="fa fa-pencil-alt fa-sm"></i></a>';
            return $show.$edit;
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
        $data = new User;
        $title = "Buat User";
        $action = "create";
        return view('layouts.administrator.user.create', compact('title','data','action'));
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
            'password' => 'required',
            'email' => 'required|unique:users,email'
        ]);

        DB::beginTransaction();
        try {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->type = "administrator";
            $user->save();
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }
        Alert::alert('Success', 'User Baru Telah di Daftarkan', 'success');
        return redirect()->route('administrator.user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  User::find($id);
        $title = "Lihat User";
        $action = "show";
        return view('layouts.administrator.user.show', compact('title','data','action'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  User::find($id);
        $title = "Buat User";
        $action = "edit";
        return view('layouts.administrator.user.edit', compact('title','data','action'));
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
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'email' => "required|email|unique:users,email,$id"
        ]);

        $user = User::findOrFail($id);

        DB::beginTransaction();
        try {

            $user->name = $request->name;
            $user->password =  bcrypt($request->password);;
            $user->email = $request->email;
            $user->save();
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            return abort(500);
        }

        Alert::alert('Success', 'User ' . $user->name . ' Telah di Ubah', 'info');
        return redirect()->route('administrator.user.index');
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
