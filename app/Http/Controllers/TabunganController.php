<?php

namespace App\Http\Controllers;
use App\Siswa;
use App\Tabungan;
use Illuminate\Http\Request;
use App\DB;

class TabunganController extends Controller
{
    public function jumlah_tabungan()
    {
        $tabungan = Tabungan::with('siswa')->select(
                     'siswa_id',
                     \DB::raw('sum(tabungans.jumlah_uang) as jumlah_uang')
             )
                     ->groupBy('siswa_id')
                     ->get();
            // dd($tabungan);
            return view('tabungan.report', compact('tabungan'));
    }

    public function index()
    {
        $tabungan = Tabungan::with('siswa')->get();
        return view('tabungan.index', compact('tabungan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = Siswa::all();
        return view('tabungan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabungan = new Tabungan;
        $tabungan->siswa_id = $request->siswa_id;
        $tabungan->jumlah_uang = $request->jumlah_uang;
        $tabungan->save();
        return redirect()->route('tabungan.index')->with(['message' => 'Data Tabungan Berhasil disimpan']);
    }


    public function show($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return view('tabungan.show', compact('tabungan'));
    }

    public function edit($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        $siswa = Siswa::all();
        return view('tabungan.edit', compact('tabungan', 'siswa'))->with(['message' => 'Data Tabungan Berhasil diedit']);
    }

    public function update(Request $request, $id)
    {
       $tabungan = Tabungan::findOrFail($id);
        $tabungan->siswa_id = $request->siswa_id;
        $tabungan->jumlah_uang = $request->jumlah_uang;
        $tabungan->save();
        return redirect()->route('tabungan.index')->with(['message' => 'Data Tabungan Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        $tabungan->delete();
        return redirect()->route('tabungan.index')
            ->with(['message' => 'Data Tabungan Berhasil diHapus']);
    }
}
