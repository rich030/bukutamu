<?php

namespace App\Http\Controllers;

use App\Models\bukutamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{

    public function index()
    {
        $dtTamu = bukutamu::all();
        return view('tamu.datatamu', compact('dtTamu'));
    }

    public function create()
    {
        return view('tamu.inputtamu');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        bukutamu::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'tanggal' => $request->tanggal,
            'komentar' => $request->komentar
        ]);

        return redirect('datatamu')->with('success', 'Task Created Successfully!');

    }

    public function edit($id)
    {
        $peg = bukutamu::findorfail($id);
        return view('tamu.edittamu', compact('peg'));
    }

    public function update(Request $request, $id)
    {
        $peg = bukutamu::findorfail($id);
        $peg->update($request->all());

        return redirect('datatamu');
    }

    public function destroy($id)
    {
        $peg = bukutamu::findorfail($id);
        $peg->delete();

        return back();
    }
}
