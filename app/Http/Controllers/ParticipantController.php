<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ParticipantsExport;

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
        Participant::create($request->all());
        return redirect()->route('participants.index');
    }

    public function edit($id)
    {
        $participant = Participant::findOrFail($id);
        return view('participants.edit', compact('participant'));
    }

    public function update(Request $request, $id)
    {
        $participant = Participant::findOrFail($id);
        $participant->update($request->all());
        return redirect()->route('participants.index');
    }

    public function destroy($id)
    {
        $participant = Participant::findOrFail($id);
        $participant->delete();
        return redirect()->route('participants.index');
    }

    public function export()
    {
        return Excel::download(new ParticipantsExport, 'participants.xlsx');
    }
}