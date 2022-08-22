<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AspirantesExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Email',
            'Resultados'
        ];
    }

    public function collection()
    {
        return DB::table('aspirantes')->select('id', 'name', 'email', 'results')->get();
    }
}
