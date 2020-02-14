<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobi;

class HobiController extends Controller
{
    public function index()
    {
        $hobi = Hobi::all();
        return view('hobi.index', compact('hobi'));
    }

    public function create()
    {
        return view('hobi.create');
    }

    public function store(Request $request)
    {
        $hobi = new Hobi;
        $hobi->hobi = $request->hobi;
        $hobi->save();
        return redirect()->route('hobi.index')->with(['message' => 'Data Hobi Berhasil disimpan']);
    }

    public function show($id)
    {
        $hobi = Hobi::findOrFail($id);
        return view('hobi.show', compact('hobi'));
    }

    public function edit($id)
    {
        $hobi = Hobi::findOrFail($id);
        return view('hobi.edit', compact('hobi'));
    }

    public function update(Request $request, $id)
    {
        $hobi = Hobi::findOrFail($id);
        $hobi->hobi = $request->hobi;
        $hobi->save();
        return redirect()->route('hobi.index')->with(['message' => 'Data Hobi Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $hobi = Hobi::findOrFail($id);
        $hobi->delete();
        return redirect()->route('hobi.index')->with(['message' => 'Data Hobi Berhasil dihapus']);
    }
}
