<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Fasilitas::get();
        return view('admin.fasilitas.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $nama_photo = rand() . $image->getClientOriginalName();
        $image->move('images/fasilitas', $nama_photo);
        $photo = 'images/fasilitas/' . $nama_photo;

        Fasilitas::create([
            'nama' => $request->nama,
            'foto' => $photo
        ]);

        return redirect('admin/fasilitas')->with('message', 'Data added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit',compact('data'));
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
        $fasilitas = Fasilitas::findOrFail($id);
        $nama = $request->nama;
        $image = $request->file('image');
        if ($image == "") {
            $fasilitas->update([
                'nama' => $nama,
            ]);
            return redirect('admin/fasilitas')->with('message', 'Data Update Successfully');
        } else {
            File::delete(public_path($fasilitas->foto));
            $nama_photo = rand() . $image->getClientOriginalName();
            $image->move('images/media_pembayaran', $nama_photo);
            $photo = 'images/media_pembayaran/' . $nama_photo;

            $fasilitas->update([
                'nama' => $request->nama,
                'foto' => $photo
            ]);
            return redirect('admin/fasilitas')->with('message', 'Data Update Successfully');
        }
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
        $data  = Fasilitas::findOrFail($id);
        File::delete(public_path($data->foto));
        $data->delete();
        return redirect('admin/fasilitas')->with('message', 'Data Delete Successfully');
    }
}
