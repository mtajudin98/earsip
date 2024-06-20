<?php

namespace App\Http\Controllers;

use App\Models\Detail_Arsip;
use Illuminate\Http\Request;

class DetailArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailarsip = Detail_Arsip::orderBy('created_at','DESC')->get();
        return view('detail_arsip.index',compact('detailarsip'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('detail_arsip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        arsip::create($request->all());
        return redirect()->route('detail_arsip')->with('success','Kantor Induk di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailarsip= DetailArsip::findOrFail($id);
        return view('detail_arsip.show',compact('detailarsip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailarsip= DetailArsip::findOrFail($id);
        return view('detail_arsip.edit',compact('detailarsip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detailarsip= DetailArsip::findOrFail($id);
        $detailarsip->update($request->all());
        return redirect()->route('detail_arsip')->with('success','Kantor Induk telah di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kantor = arsip::findOrFail($id);
        $kantor->delete();
        return redirect()->route('detail-arsip')->with('success','Kantor Induk telah di hapus');
    }
}
