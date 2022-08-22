<?php

namespace App\Http\Controllers;

use App\Exports\AspirantesExport;
use App\Models\Aspirante;
use Maatwebsite\Excel\Facades\Excel;

class AspiranteController extends Controller
{
    public function index(){
        return Aspirante::all();
    }

    public function export(){
        return Excel::download(new AspirantesExport, 'aspirantes.xlsx');
    }
}
