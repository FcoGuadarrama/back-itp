<?php

namespace App\Exports;

use App\Models\Aspirante;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class AspirantesExport implements FromView
{
  public function view(): View
  {
    return view('exports.aspirantes', [
      'aspirantes' => Aspirante::all()
    ]);
  }
}
