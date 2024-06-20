<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kantorinduk = Kantor_Induk::orderBy('created_at','DESC')->get();
        return view('kantor_induk.index',compact('kantorinduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('kantor_induk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kantor_Induk::create($request->all());
        return redirect()->route('kantor_induk')->with('success','Kantor Induk di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kantorinduk = Kantor_Induk::findOrFail($id);
        return view('kantor_induk.show',compact('kantorinduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kantorinduk = Kantor_Induk::findOrFail($id);
        return view('kantor_induk.edit',compact('kantorinduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kantor = Kantor_Induk::findOrFail($id);
        $kantor->update($request->all());
        return redirect()->route('kantor_induk')->with('success','Kantor Induk telah di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kantor = Kantor_Induk::findOrFail($id);
        $kantor->delete();
        return redirect()->route('kantor_induk')->with('success','Kantor Induk telah di hapus');
    }

    public function home1(){
        return view('dashboard-member');
    }
    public function home2(){
        return view('dashboard-manajer');
    }
}
