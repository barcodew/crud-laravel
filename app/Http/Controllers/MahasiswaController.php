<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhsdata = Mahasiswa::all();
        return view('home', ['data' => $mhsdata]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Mahasiswa::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mhsdata = Mahasiswa::findOrFail($id);
        return view('data-details', ['data' => $mhsdata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Mahasiswa::findOrFail($id);
        return view('update-data', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->delete();
        return Redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $mhsdata = Mahasiswa::findOrFail($id);
        return view('delete-data', ['data' => $mhsdata]);
    }
}
