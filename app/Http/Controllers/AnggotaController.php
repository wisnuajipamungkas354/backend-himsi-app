<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Http\Requests\StoreAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('anggotas')
            ->join('divisis', 'anggotas.id_divisi', '=', 'divisis.id')
            ->select('anggotas.*', 'divisis.nm_divisi')
            ->get();
        return json_encode($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Divisi::all();
        return json_encode($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|unique:anggotas',
            'nama' => 'required',
            'kelas' => 'required',
            'kota_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
            'id_divisi' => 'required'
        ]);

        // $validatedData['id_divisi'] = 1;
        Anggota::create($validatedData);
        return response()->json(['pesan' => 'success'], status: 200);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        $data =  $data = DB::table('anggotas')
            ->join('divisis', 'anggotas.id_divisi', '=', 'divisis.id')
            ->select('anggotas.*', 'divisis.nm_divisi')
            ->where('anggotas.id', '=', $anggota->id)
            ->get();
        return json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        $validatedData = $request->validate([
            'nim' => 'required|unique:anggotas',
            'nama' => 'required',
            'kelas' => 'required',
            'kota_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        $validatedData['id_divisi'] = $anggota->id_divisi;
        DB::table('anggotas')->where('id', '=', $anggota->id)->update($validatedData);
        return response()->json(['pesan' => 'Update Berhasil'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        DB::table('anggotas')->where('id', '=', $id)->delete();
        return response()->json(['pesan' => 'Success'], status: 200);
    }
}
