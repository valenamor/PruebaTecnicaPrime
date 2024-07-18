<?php

namespace App\Exports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\FromCollection;

class ParticipantsExport implements FromCollection
{
    public function collection()
    {
        return Participant::all();
    }
}
