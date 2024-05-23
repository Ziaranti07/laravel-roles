<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;


class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-mahasiswa|edit-mahasiswa|delete-mahasiswa|show-mahasiswa', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-mahasiswa', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-mahasiswa', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-mahasiswa', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'mahasiswa.index',
            [
                'mahasiswa' => Mahasiswa::latest('NIM')->paginate(3),
            ]
        );
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request): RedirectResponse
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->withSuccess('New mahasiswa is added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', [
            'mahasiswa' => $mahasiswa,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', [
            'mahasiswa' => $mahasiswa,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa): RedirectResponse
    {
        $firstData = [
            'nama' => 'required|string|max:250',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
        ];


        if ($request->NIM != $mahasiswa->NIM) {
            $firstData['NIM'] = 'required|string|max:255|unique:mahasiswas';
        }


        $validatedData = $request->validate($firstData);


        Mahasiswa::where('NIM', $mahasiswa->NIM)->update($validatedData);


        return redirect()->route('mahasiswa.index')->withSuccess('Data Mahasiswa is updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa): RedirectResponse
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->withSuccess('Data Mahasiswa is deleted successfully');
    }
}
