<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AktivitasController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        //get all aktivitas
        // $aktivitas = Aktivitas::with(['mahasiswaRel', 'pembimbing1Rel', 'pembimbing2Rel', 'penguji1Rel', 'penguji2Rel', 'penguji3Rel'])->paginate(10);
        // dd($aktivitas[0]->mahasiswaRel->nim);
        $aktivitas = Aktivitas::paginate(10);

        //render view with aktivitas
        return view('aktivitas.index', compact('aktivitas'));
    }

     /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $mahasiswas = \App\Models\Mahasiswa::all();
        $dosens = \App\Models\Dosen::all();
        return view('aktivitas.create', compact('mahasiswas', 'dosens'));
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request): RedirectResponse
    {
        //define validation rules
        $request->validate([
                'judul'         => 'required|string|max:255',
                'no_sk'         => 'required|string|max:20',
                'tanggal_sk'   =>  'required|date',
                'tanggal_mulai' => 'required|date',
                'tanggal_akhir' => 'required|date',
                'semester'      => 'required|string',
                'mahasiswa'     => 'required|exists:mahasiswas,id',
                'pembimbing1'   => 'required|exists:dosens,id|different:pembimbing2,penguji1,penguji2,penguji3',
                'pembimbing2'   => 'required|exists:dosens,id|different:pembimbing1,penguji1,penguji2,penguji3',
                'penguji1'     =>  'required|exists:dosens,id|different:pembimbing1,pembimbing2,penguji2,penguji3',
                'penguji2'     =>  'required|exists:dosens,id|different:pembimbing1,pembimbing2,penguji1,penguji3',
                'penguji3'     =>  'required|exists:dosens,id|different:pembimbing1,pembimbing2,penguji1,penguji2',
        ]);

        //create aktivitas
        Aktivitas::create([
            'judul'         => $request->judul,
            'no_sk'         => $request->no_sk,
            'tanggal_sk'    => $request->tanggal_sk,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'semester'      => $request->semester,
            'mahasiswa'     => $request->mahasiswa,
            'pembimbing1'   => $request->pembimbing1,
            'pembimbing2'   => $request->pembimbing2,
            'penguji1'      => $request->penguji1,
            'penguji2'      => $request->penguji2,
            'penguji3'      => $request->penguji3,
        ]);

        //return response
        return redirect()->route('aktivitas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

      public function show(string $id): View
    {
        //get product by ID
        $aktivitas = Aktivitas::findOrFail($id);

        //render view with product
        return view('aktivitas.show', compact('aktivitas'));
    }

    // other methods (edit, update, destroy) can be added here as needed

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get product by ID
        $aktivitas = Aktivitas::findOrFail($id);
        $mahasiswas = \App\Models\Mahasiswa::all();
        $dosens = \App\Models\Dosen::all();

        //render view with product
        return view('aktivitas.update', compact('aktivitas'), compact('mahasiswas', 'dosens'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'judul'         => 'required|string|max:255',
            'no_sk'         => 'required|',
            'tanggal_sk'    => 'required|',
            'tanggal_mulai' => 'required|',
            'tanggal_akhir' => 'required|',
            'semester'      => 'required|',
            'mahasiswa'     => 'required|',
            'pembimbing1'   => 'required|',
            'pembimbing2'   => 'required|',
            'penguji1'      => 'required|',
            'penguji2'      => 'required|',
            'penguji3'      => 'required|',
        ]);

        //get product by ID
        $aktivitas = Aktivitas::findOrFail($id);

            //update product without image
            $aktivitas->update([
                'judul'         => $request->judul,
                'no_sk'         => $request->no_sk,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_akhir' => $request->tanggal_akhir,
                'semester'      => $request->semester,
                'mahasiswa'     => $request->mahasiswa,
                'pembimbing1'   => $request->pembimbing1,
                'pembimbing2'   => $request->pembimbing2,
                'penguji1'      => $request->penguji1,
                'penguji2'      => $request->penguji2,
                'penguji3'      => $request->penguji3,
            ]);


        //redirect to index
        return redirect()->route('aktivitas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}