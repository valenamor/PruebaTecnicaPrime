<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::all();
        return view('participants.index', compact('participants'));
    }

    public function create()
    {
        return view('participants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string|unique:participants,id',
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:participants,email',
            'score' => 'required|integer',
        ]);

        Participant::create($request->all());
        return redirect()->route('participants.index')->with('success', 'Participante creado exitosamente.');
    }

    public function edit($id)
    {
        $participant = Participant::findOrFail($id);
        return view('participants.edit', compact('participant'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|unique:participants,id,' . $id,
            'nombre' => 'required',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required',
            'email' => 'required|email',
            'score' => 'required|numeric',
        ]);

        $participant = Participant::findOrFail($id);
        $participant->update($request->all());
        return redirect()->route('participants.index')->with('success', 'Participante actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $participant = Participant::findOrFail($id);
        $participant->delete();
        return redirect()->route('participants.index')->with('success', 'Participante eliminado exitosamente.');
    }
}
