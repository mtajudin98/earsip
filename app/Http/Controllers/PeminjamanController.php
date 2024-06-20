<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::orderBy('created_at','DESC')->get();
        return view('peminjaman.index',compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('peminjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Peminjaman::create($request->all());
        return redirect()->route('peminjaman')->with('success','Kantor Induk di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.show',compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.edit',compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kantor = Peminjaman::findOrFail($id);
        $kantor->update($request->all());
        return redirect()->route('peminjaman')->with('success','Kantor Induk telah di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kantor = Peminjaman::findOrFail($id);
        $kantor->delete();
        return redirect()->route('peminjaman')->with('success','Kantor Induk telah di hapus');
    }
}
